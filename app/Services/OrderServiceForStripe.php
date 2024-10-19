<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class OrderServiceForStripe
{
    protected $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function placeOrder($amount)
    {
        return $this->paymentGateway->processPayment($amount);
    }
}
