<?php

namespace App\Providers;

use App\Services\PaypalPaymentGateway;
use App\Services\StripePaymentGateway;
use App\Services\OrderServiceForPaypal;
use App\Services\OrderServiceForStripe;
use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentGatewayInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(PaymentGatewayInterface::class, StripePaymentGateway::class);
        /*
// Bind a default implementation of PaymentGatewayInterface
$this->app->bind(PaymentGatewayInterface::class, StripePaymentGateway::class);

// Optionally, bind Stripe and PayPal to named bindings
$this->app->bind('stripe', function ($app) {
    return new StripePaymentGateway();
});

$this->app->bind('paypal', function ($app) {
    return new PaypalPaymentGateway();
});
*/

        // Contextual binding for OrderServiceForStripe
        $this->app->when(OrderServiceForStripe::class)
            ->needs(PaymentGatewayInterface::class)
            ->give(StripePaymentGateway::class);

        // Contextual binding for OrderServiceForPaypal
        $this->app->when(OrderServiceForPaypal::class)
            ->needs(PaymentGatewayInterface::class)
            ->give(PaypalPaymentGateway::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
