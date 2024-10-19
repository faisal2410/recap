<?php

namespace App\Services;

class DiscountService
{
    public function calculateDiscount($totalAmount)
    {
        if ($totalAmount > 100) {
            return $totalAmount * 0.10; // 10% discount
        }
        return 0;
    }
}
