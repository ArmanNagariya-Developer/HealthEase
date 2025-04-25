@extends('Admin.layout.layout')
@section('content')
 

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">user List</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">users </li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          {{-- <form method="GET" action="{{ route('admin.users') }}" class="m-3">
    <div class="row">
        <div class="col-sm-6">
            <input type="date" name="user_date" class="form-control" value="{{ request('user_date') }}">
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Filter by Date</button>
            <a href="{{route("admin.users")}}" class="btn btn-danger">Clear</a>
        </div>
    </div>
</form> --}}

<form action="{{route("admin.refund")}}" method="get" >
   
  <div class="row p-3 justify-content-end">
    <div class="col-sm-4">
       <div class="mb-3">
        <div class="mb-3">
                
            
            <select class="form-select form-select-lg" name="selectedEvent" id="">

                <option selected>Select Canceled Event</option>
            @foreach ($cancelEvents as $row )

                <option value="{{$row->id}}" {{request('selectedEvent')==$row->id ? "selected" : ""}}>{{$row->title}}</option>
            @endforeach
          
            </select>

        </div>
        
      </div>
    </div>
     <div class="col-sm-2">
       <div class="mb-3 p-1">
        <div class="d-grid gap-2">
          <button
            type="submit"
            name=""
            id=""
            class="btn btn-primary"
          >
            Filter
          </button>
        </div>

      </div>
    </div>
  </div>
 
      
      
  </form>
  @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Message:</strong> {{session('error')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif
  @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message:</strong> {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif

          <div class="container-fluid ">
            <!--begin::Row-->
            <div class="row justify-content-center">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">List Of users </h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>

                        <tr>
                        <th style="width: 100px"> Id</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Refund Amount</th>
                          <th style="width: 40px" colspan="2" class="text-center">Action</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($userdata as $row )
                        <tr class="align-middle">
                          <td>{{$row->id}}</td>
                          <td>{{$row->username}}</td>
                          <td>{{$row->email}}</td>
                          <td>Rs. {{$row->event->price * $row->total_booked_tickets}}</td>
                          <td class="text-center">
                            
                            <a href="{{route('admin.refundPayment',$row->transaction_id)}}" class="btn btn-warning text-dark" >Refund</a>
                                
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
             
              </div>
            </div>
          </div>
        </div>
      </main>

@endsection

