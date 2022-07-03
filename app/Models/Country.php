<?php

namespace App\Models;

use OwenIt\Auditing\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Country extends Model implements AuditableContract
{
    use Auditable, HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code'
    ];

    public function paymentOptions()
    {
        return $this->belongsToMany(PaymentOption::class)->using(CountryPaymentOption::class);
    }

    public function campaigners()
    {
        return $this->hasMany(Campaigner::class);
    }
}
