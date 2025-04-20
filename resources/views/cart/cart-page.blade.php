@extends('layout.layout')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">🛒 Your Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($cartItems->count() > 0)
        <table class="table table-bordered text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Image</th>
                    <th>Medicine Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>
                            <img src="{{ $item->medicine->image }}" width="50" class="rounded">
                        </td>
                        <td>{{ $item->medicine->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>₹{{ number_format($item->medicine->price, 2) }}</td>
                        <td>₹{{ number_format($item->medicine->price * $item->quantity, 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/" class="btn btn-primary mt-3"><i class="fas fa-shopping-bag"></i> Continue Shopping</a>
        
    <a href="{{ route('checkout.index') }}" class="btn btn-success btn-lg">
        <i class="fas fa-credit-card"></i> Proceed to Checkout
    </a>
    @else
        <div class="alert alert-info">Your cart is empty.</div>
    @endif
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
