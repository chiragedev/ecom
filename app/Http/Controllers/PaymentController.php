<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm(Request $request)
    {
        $total = $request->query('total', 0);
        return view('payment.form', compact('total'));
    }

    public function processPayment(Request $request)
    {
        // Simulate payment processing
        $request->validate(['payment_method' => 'required']);
        return redirect()->route('payment.success');
    }

    public function paymentSuccess()
    {
        session()->flash('message', 'Payment successful!');
        return redirect()->route('cart');
    }
}
