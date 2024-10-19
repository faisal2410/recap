<?php

namespace App\Contracts;

interface PaymentGatewayInterface
{
    public function processPayment($amount);
}
