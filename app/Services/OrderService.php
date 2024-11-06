<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

class OrderService
{


// Example 1

protected $paymentGateway;

public function __construct(PaymentGateway $paymentGateway)
{
    $this->paymentGateway = $paymentGateway;
}

public function placeOrder($amount)
{
    return $this->paymentGateway->processPayment($amount);
}


// Example 2

protected $paymentGateway;

public function __construct(StripePaymentGateway $paymentGateway)
{
    $this->paymentGateway = $paymentGateway;
}

public function placeOrder($amount)
{
    return $this->paymentGateway->processPayment($amount);
}



    // Example 3

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
