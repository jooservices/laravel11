<?php

namespace Modules\Payment\Services;

use Modules\Payment\App\Models\PaymentProcessor;

class ProcessorManager
{
    private PaymentProcessor $paymentProcessor;

    public function __construct(private string $paymentProcessorUuid)
    {
        $this->paymentProcessor = PaymentProcessor::where('uuid', $this->paymentProcessorUuid)
            ->first();
    }

    public function getProcessor(): PaymentProcessorInterface
    {
        $this->validatePaymentProcessor();

        return app($this->paymentProcessor->model);
    }

    private function validatePaymentProcessor(): void
    {
        if (!$this->paymentProcessor) {
            throw new \Exception('Payment processor not found');
        }

        if (!$this->paymentProcessor->is_active) {
            throw new \Exception('Payment processor is not active');
        }
    }
}
