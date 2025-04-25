@extends('Admin.layout.layout')

@section("content")


 <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Category List</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Events </li>
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
          <form method="GET" action="{{ route('admin.category') }}" class="m-3">
    <div class="row">
        <div class="col-sm-6">
            <input type="text" name="category_name" class="form-control" value="{{ request('category_name') }}">
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{route("admin.category")}}" class="btn btn-danger">Clear</a>
        </div>
    </div>
</form>

@if (session('Success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message: </strong> {{ session('Success') }} 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>   
@endif


          <div class="container-fluid ">
            <!--begin::Row-->
            <div class="row justify-content-center">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">List Of Category </h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 100px"><a href="{{route("admin.category",['sort_by'=>'id', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-numeric-{{request('direction')=='asc'?'up':'down'}} fs-4 p-2"></i>#Id</a></th>
                          <th><a href="{{route("admin.category",['sort_by'=>'category_name', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-4 p-2"></i>Category Name</a></th>
                          <th colspan="2" class="text-center">Action</th>                          
                        </tr>
                      </thead>
                      <tbody>
                          
                     
                        @forelse ($categories as $category )
                        <tr class="align-middle">
                          <td>{{$category->id}}</td>
                          <td>{{$category->category_name}}</td>
                          <td class="text-end">
                            <a href="{{route('admin.update_categoryID',$category->id)}}" class="btn btn-primary text-light">Update</a>
                          </td>
                          <td>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$category->id}}">
  Delete
</button>

<div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModal{{$category->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this event category?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('admin.delete_category', $category->id) }}" method="POST" >
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>

                          </td>
                        </tr>
                        @empty
                          <td colspan="4" class="text-center">No Data Found</td>  
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    {{$categories->appends(["event_date"=>$date??""])->links('pagination::bootstrap-5')}}
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