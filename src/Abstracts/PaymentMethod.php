<?php

namespace Utyemma\Chargepro\Abstracts;

use Illuminate\Http\Client\PendingRequest;
use Utyemma\Chargepro\Contracts\PaymentPlatform;


abstract class PaymentProvider implements PaymentPlatform {

    protected PendingRequest $client = null;

    public function connect(){
        $this->client = $this->client(); 
        return $this;   
    }

    



}