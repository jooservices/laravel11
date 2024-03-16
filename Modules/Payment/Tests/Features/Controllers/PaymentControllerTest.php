<?php

namespace Modules\Payment\Tests\Features\Controllers;

use Modules\Payment\App\Models\PaymentProcessor;
use Tests\TestCase;

class PaymentControllerTest extends TestCase
{
    public function testPay()
    {
        $paymentMethod = PaymentProcessor::inRandomOrder()->first();
        $response = $this->json(
            'POST',
            route('api.payment.pay'),
            [
                'payment_method' => $paymentMethod->uuid
            ]
        );

        dd($response->getContent());

    }
}
