<?php

namespace App\Models;

use OwenIt\Auditing\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class Connectivity extends Model implements AuditableContract
{
    use Auditable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_payment_option_id', 'api_url', 'request_type_id', 'http_method',
        'corresponding_file'
    ];

    public function requestType()
    {
        return $this->belongsTo(RequestType::class);
    }
    public function countryPaymentOption()
    {
        return $this->belongsTo(CountryPaymentOption::class);
    }
}
