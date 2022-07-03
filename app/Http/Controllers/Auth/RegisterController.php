<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return Inertia::render('Auth/Register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'max:100'],
            'lastname' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);


        $user = User::create([
            'name' => $request->input("firstname") . " " . $request->input("lastname"),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input("phone"),
            'active' => User::ACTIVE
        ]);

        try {
            $role = ['manager']; //Pick manager role to manage/own the Campaigners account
            $user->assignRole($role);
        } catch (\Exception $e) {
        }
        #event(new Registered($user));

        #Auth::login($user);

        #$request->session()->flash('success', 'User registered successfully! you can sign in now');

        return redirect("/dashboard/causes/create");
    }
}
