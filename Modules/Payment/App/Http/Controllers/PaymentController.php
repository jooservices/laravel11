<?php

namespace Modules\Payment\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Payment\App\Http\Requests\PayRequest;
use Modules\Payment\Services\PaymentService;

class PaymentController extends Controller
{
    public function pay(PayRequest $request, PaymentService $paymentService)
    {
        $paymentService->pay($request->input('payment_method'));
    }
}
