<?php

namespace App\Enums;

use App\Models\PaymentMethod;
use App\Platforms\Payment\Paystack\PaystackProvider;
use App\Platforms\Payment\Stripe\StripeProvider;

enum PaymentMethods:string {

    case PAYSTACK = 'paystack';
    case STRIPE = 'stripe';

    function status(){
        return $this->model()->status;
    }

    // function model() : PaymentMethod {
    //     return PaymentMethod::whereShortcode($this)->first();
    // }

    function default(){
        return [
            'name' => $this->label(),
            'shortcode' => $this,
            'config' => config("payment.{$this->value}")
        ];
    }

    function provider(){
        return match ($this) {
            // self::STRIPE => StripeProvider::class,
            // self::PAYSTACK => PaystackProvider::class,
        };
    }

    function label(){
        return match ($this) {
            self::STRIPE => "Stripe",
            self::PAYSTACK => "Paystack",
        };
    }

    static function options(){
        return collect([
            self::STRIPE->value => self::STRIPE->label(),
            self::PAYSTACK->value => self::PAYSTACK->label(),
        ]);
    }

}