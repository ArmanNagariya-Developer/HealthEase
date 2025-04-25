@extends('Admin.layout.layout')

@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Create Event</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Event </li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content ">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row g-4 justify-content-center">
                    <!--begin::Col-->
                    <div class="col-12">

                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title"> Update Users </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form action="{{ route('admin.update_user', $findUsers->id) }}" method="post">
                                <!--begin::Body-->
                                @method('put')
                                @csrf

                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">name</label>
                                        <input type="text"
                                            class="form-control @error('name')
                              is-invalid
                          @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" name="name"
                                            value="{{ $findUsers->name }}" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text"
                                            class="form-control @error('email')
                              is-invalid
                          @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                                            value="{{ $findUsers->email }}" />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="" class="form-label">Role</label>
                                          @php
    $roles = ['admin', 'organizer', 'user']; // Enum values
@endphp
                                        <select class="form-select form-select-lg" name="role" id="">
                                          

                                            @foreach($roles as $role)
        <option value="{{ $role }}" @if($findUsers->role == $role) selected @endif>
            {{ ucfirst($role) }}
        </option>
    @endforeach
                                        </select>
                                    </div>

                                    @error('role')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Quick Example-->

                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
