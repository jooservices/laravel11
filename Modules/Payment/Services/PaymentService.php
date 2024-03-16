<?php

namespace Modules\Payment\Services;

use Modules\Payment\App\Models\PaymentProcessor;

class PaymentService
{
    public function pay(string $paymentUuid): bool
    {
        $processor = app(ProcessorManager::class, ['paymentProcessorUuid' => $paymentUuid])
            ->getProcessor();
        $processor->pay();
    }
}
