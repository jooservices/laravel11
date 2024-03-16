<?php

namespace Modules\Payment\Services;

interface PaymentProcessorInterface
{
    public function pay(): bool;
}
