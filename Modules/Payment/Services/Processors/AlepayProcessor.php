<?php

namespace Modules\Payment\Services\Processors;

use Modules\Payment\Services\PaymentProcessorInterface;

class AlepayProcessor implements PaymentProcessorInterface
{
    public function pay(): bool
    {
        return true;
    }
}
