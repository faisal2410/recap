<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;

/*
class PaypalPaymentGateway 
{
public function processPayment($amount)
{
    return "Processing payment of $$amount via PayPal.";
}
*/

class PaypalPaymentGateway implements PaymentGatewayInterface
{
    public function processPayment($amount)
    {
        return "Processing payment of $$amount via PayPal.";
    }



}
