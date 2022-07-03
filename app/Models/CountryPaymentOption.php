<?php

namespace App\Models;

use OwenIt\Auditing\Auditable;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class CountryPaymentOption extends Pivot implements AuditableContract
{
    use  Auditable, HasFactory;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id',
        'payment_option_id',
        'api_key',
        'api_secret',
        'api_username',
        'api_url',
        'logo',
        'website',
        'address',
        'active'
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function paymentOption()
    {
        return $this->belongsTo(PaymentOption::class);
    }

    public function connectivities()
    {
        return $this->hasMany(Connectivity::class);
    }
}
