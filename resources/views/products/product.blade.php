@extends('layout.layout')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">All Medicines</h2>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-6 mx-auto">
            <form action="" method="GET" class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search medicines..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>

    <!-- Medicine Grid -->
    <div class="row">
        @foreach($medicines as $medicine)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{$medicine->image}}" class="card-img-top" alt="{{ $medicine->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $medicine->name }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($medicine->description, 80) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-success fw-bold">₹{{ $medicine->price }}</span>
                        <a href="{{route("medicine.details",$medicine->id)}}" class="btn btn-sm btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $medicines->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
