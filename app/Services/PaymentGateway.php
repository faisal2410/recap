<?php

namespace App\Services;

class PaymentGateway
{
    /**
     * Create a new class instance.
     */
   public function processPayment($amount)
    {
        return "Processing payment of $$amount.";
    }
}
