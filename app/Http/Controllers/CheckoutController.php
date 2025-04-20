<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
{
    $cartItems = Cart::with('medicine')->get();

    $totalAmount = $cartItems->sum(function ($item) {
        return $item->medicine->price * $item->quantity;
    });

    return view('cart.checkout', compact('totalAmount'));
}

    public function process(Request $request)
    {
        // Stripe::setApiKey(env('STRIPE_SECRET'));

        // $session = StripeSession::create([
        //     'line_items' => [[
        //         'price_data' => [
        //             'currency' => 'inr',
        //             'product_data' => [
        //                 'name' => 'Medicine Purchase',
        //             ],
        //             'unit_amount' => $request->amount * 100,
        //         ],
        //         'quantity' => 1,
        //     ]],
        //     'mode' => 'payment',
        //     'success_url' => route('checkout.success'),
        //     'cancel_url' => route('checkout.index'),
        // ]);

        // return redirect($session->url);
    }

    public function success()
    {
        // Clear cart session if needed
        return view('checkout-success');
    }
}
