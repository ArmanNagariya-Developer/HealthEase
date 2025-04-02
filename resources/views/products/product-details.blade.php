@extends('layout.layout')

@section('content')
<div class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="row g-0">
            <!-- Medicine Image -->
            <div class="col-md-5">
                <div class="p-3">
                    <img src="{{ $medicine->image }}" class="img-fluid rounded-3" alt="{{ $medicine->name }}">
                </div>
            </div>

            <!-- Medicine Details -->
            <div class="col-md-7">
                <div class="card-body p-4">
                    <h2 class="card-title fw-bold">{{ $medicine->name }}</h2>
                    <p class="text-muted fs-5"><strong>Brand:</strong> {{ $medicine->brand }}</p>
                    <p class="card-text text-secondary">{{ $medicine->description }}</p>

                    <div class="d-flex align-items-center my-3">
                        <h3 class="text-success fw-bold me-3">₹{{ number_format($medicine->price, 2) }}</h3>
                        <span class="badge {{ $medicine->stock > 0 ? 'bg-success' : 'bg-danger' }} px-3 py-2">
                            {{ $medicine->stock > 0 ? $medicine->stock . ' Available' : 'Out of Stock' }}
                        </span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4">
                        <form action="{{ route('cart.add', $medicine->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-lg btn-success shadow-sm">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </form>
                        <a href="{{ url()->previous() }}" class="btn btn-lg btn-outline-secondary shadow-sm">
                            <i class="fas fa-arrow-left"></i> Back to Shop
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Icons & FontAwesome (Include in Layout if Not Added) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

@endsection
