<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Cart;
use App\Services\PayPalService;

class CheckoutController extends Controller
{
    protected $orderRepository;
    protected $payPal;

    public function __construct(OrderContract $orderRepository, PayPalService $payPal)
    {
        $this->orderRepository = $orderRepository;
        $this->payPal = $payPal;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function placeOrder(Request $request)
    {
        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());
        if($order){
        $this->payPal->processPayment($order);
        // Cart::clear();
        return redirect('/')->with('message', 'Order Placed  successfully.');
        }
        return redirect('/')->with('error', 'Order not placed successfully.');


        // dd($order);
    }
    public function complete(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');

        $status = $this->payPal->completePayment($paymentId, $payerId);

        $order = Order::where('order_number', $status['invoiceId'])->first();
        $order->status = 'processing';
        $order->payment_status = 1;
        $order->payment_method = 'PayPal -'.$status['salesId'];
        $order->save();

        Cart::clear();
        return view('site.pages.success', compact('order'));
    }
}
