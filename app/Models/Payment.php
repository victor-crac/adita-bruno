<?php

namespace App\Models;

use App\Models\RequestType;
use OwenIt\Auditing\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Payment extends Model implements AuditableContract
{
    use Auditable, HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_payment_option_id',
        'payment_status_id',
        'transaction_id',
        'amount',
        'currency',
        'vendor_message',
        'vendor_reference',
        'email',
        'phone_number',
        'sender_number',
        'receiver_number',
        'reason'
    ];

    public function  paymentStatus()
    {
        return $this->belongsTo(PaymentStatus::class);
    }

    public function  paymentProvider()
    {
        return $this->belongsTo(CountryPaymentOption::class, 'country_payment_option_id');
    }
  
}
