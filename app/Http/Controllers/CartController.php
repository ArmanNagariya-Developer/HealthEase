<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Medicine;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $medicine = Medicine::findOrFail($id);

        $cartItem = Cart::where('medicine_id', $id)->first();
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'medicine_id' => $id,
                'quantity' => 1
            ]);
        }

        return redirect()->back()->with('success', 'Medicine added to cart!');
    }

    // View Cart
    public function viewCart()
    {
        $cartItems = Cart::with('medicine')->get();
        return view('cart.cart-page', compact('cartItems'));
    }

    // Remove Item from Cart
    public function removeFromCart($id)
    {
        Cart::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Medicine removed from cart.');
    }
}
