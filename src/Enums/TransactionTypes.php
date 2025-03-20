<?php

namespace App\Enums;

enum TransactionTypes {

    case PAYMENT;
    case SUBSCRIPTION;
    case REFUND;

}