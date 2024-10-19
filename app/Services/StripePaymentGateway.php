<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

/*
class StripePaymentGateway
{
    public function processPayment($amount)
    {
        return "Processing payment of $$amount via Stripe.";
    }
}
*/


class StripePaymentGateway implements PaymentGatewayInterface
{
    public function processPayment($amount)
    {
        return "Processing payment of $$amount via Stripe.";
    }
}
