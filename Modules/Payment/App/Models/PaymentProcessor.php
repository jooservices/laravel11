<?php

namespace Modules\Payment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Payment\Database\factories\PaymentProcessFactory;

class PaymentProcessor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'module',

        'is_wallet',
        'is_active',
    ];

    protected static function newFactory(): PaymentProcessFactory
    {
        //return PaymentProcessFactory::new();
    }
}
