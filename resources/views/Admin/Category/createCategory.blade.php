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
                        <h3 class="mb-0">Create Event Category</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Event Category</li>
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
                                <div class="card-title"> Add Category </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form action="{{ route('admin.insert_event_category') }}" method="post"
                                enctype="multipart/form-data">
                                <!--begin::Body-->
                                @csrf
                                <div class="mb-3 pe-3 ps-3">
                                    <label for="" class="form-label"></label>
                                    <select class="form-select form-select-lg @error('user_id')
                                      is-invalid
                                    @enderror" name="user_id" id="">
                                        <option value="" selected>Select Organizer Id</option>

                                        @foreach ($organizers as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('user_id') == $item->id ? 'selected' : '' }}>
                                                {{ $item->id . '-' . $item->name }}
                                            </option>
                                        @endforeach

                                    
                                    </select>
                                        @error('user_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                </div>

                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                        <input type="text"
                                            class="form-control @error('category_name')
                              is-invalid
                          @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" name="category_name"
                                            value="{{ old('category_name') }}" />
                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
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
