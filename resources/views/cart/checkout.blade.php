@extends('layout.layout')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">💳 Checkout</h2>

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <input type="hidden" name="amount" value="{{ $totalAmount }}">
        <button class="btn btn-primary btn-lg">
            <i class="fas fa-lock"></i> Pay with Stripe
        </button>
    </form>
</div>
@endsection
