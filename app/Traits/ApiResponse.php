<?php

namespace App\Traits;

use Exception;

trait ApiResponse
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($data = [], $message, $code = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'code' => $code,
        ];

        if (!empty($data)) {
            $response['data'] = $data;
        }

        return response()->json($response, $code);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($custom_message = null, $errorMessages = null, Exception $exception = null)
    {
        $statusCode = (method_exists($exception, 'getStatusCode')) ?
            $exception->getStatusCode() : 500;

        $data = (isset($errorMessages))  ? $errorMessages : $exception->getMessage();
        $message =  (isset($custom_message)) ? $custom_message : \Symfony\Component\HttpFoundation\Response::$statusTexts[$statusCode];
        $response = [
            'success' => false,
            'message' => $message,
            'code'  => $statusCode,
            'data'  => $data
        ];

        //Get Traces if its in debug mode
        if (config('app.debug')) {
            $response['trace'] = $exception->getTraceAsString();
        }

        return response()->json($response, $statusCode);
    }

    public function sendExceptionError(Exception $exception)
    {
        $statusCode = (method_exists($exception, 'getStatusCode')) ?
            $exception->getStatusCode() : 500;

        $data = $exception->getMessage();
        $message = \Symfony\Component\HttpFoundation\Response::$statusTexts[$statusCode];
        $response = [
            'success' => false,
            'message' => $message,
            'code'  => $statusCode,
            'data'  => $data
        ];

        //Get Traces if its in debug mode
        if (config('app.debug')) {
            $response['trace'] = $exception->getTraceAsString();
        }

        return response()->json($response, $statusCode);
    }
}
