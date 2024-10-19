<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Services\OrderServiceForPaypal;
use App\Services\OrderServiceForStripe;
/*
class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }



public function createOrder()
{
    // Get the result of placing an order
    $orderMessage = $this->orderService->placeOrder(100);

    // Return the view and pass the order message to it
    return view('order', ['orderMessage' => $orderMessage]);
}


    public function createOrder($gateway)
    {
        // Dynamically resolve the specific payment gateway
        $paymentGateway = app($gateway);

        // Process the payment using the selected gateway
        $orderMessage = $paymentGateway->processPayment(100);

        return view('order', ['orderMessage' => $orderMessage]);
    }


}

*/

class OrderController extends Controller
{
    protected $stripeOrderService;
    protected $paypalOrderService;

    public function __construct(OrderServiceForStripe $stripeOrderService, OrderServiceForPaypal $paypalOrderService)
    {
        $this->stripeOrderService = $stripeOrderService;
        $this->paypalOrderService = $paypalOrderService;
    }

    public function createOrderWithStripe()
    {
        return $this->stripeOrderService->placeOrder(100);
    }

    public function createOrderWithPaypal()
    {
        return $this->paypalOrderService->placeOrder(100);
    }
}

