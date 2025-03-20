<?php

namespace Utyemma\Chargepro\Contracts;

use Illuminate\Http\Client\PendingRequest;
use Utyemma\Chargepro\Models\Subscription;
use Utyemma\Chargepro\Models\Transaction;
use Utyemma\Chargepro\Support\PaymentProviderResponse;

interface PaymentPlatform {

    public function client(): PendingRequest;

    public function checkout(Transaction $transaction): PaymentProviderResponse;

    public function verify(Transaction $transaction): PaymentProviderResponse;

    function pay(Transaction $transaction): PaymentProviderResponse;

    function subscribe(Subscription $subscription): PaymentProviderResponse;

}