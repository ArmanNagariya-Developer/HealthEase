@extends('Admin.layout.layout')

@section("content")


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
        </div>

        <div class="app-content">
   

<form action="{{ route('admin.usersManagement') }}" method="get" >
   
  <div class="row p-3 justify-content-end">
    <div class="col-sm-4">
       <div class="mb-3">
        <input
          type="text"
          class="form-control"
          name="search"
          id=""
          value="{{ old('search', request('search')) }}"
          aria-describedby="helpId"
          placeholder="Search"
        />
      </div>
    </div>
     <div class="col-sm-2">
       <div class="mb-3">
        <div class="d-grid gap-2">
          <button
            type="submit"
            name=""
            id=""
            class="btn btn-primary"
          >
            Search
          </button>
        </div>
      </div>
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
                  <div class="card-header"><h3 class="card-title">List Of users </h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th style="width: 100px"> <a href="{{route("admin.usersManagement",['sort_by'=>'id', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-numeric-{{request('direction')=='asc'?'up':'down'}} fs-4"></i> Id</a></th>
                          <th><a href="{{route("admin.usersManagement",['sort_by'=>'name', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-4 p-2"></i>Username</a></th>
                          <th><a href="{{route("admin.usersManagement",['sort_by'=>'email', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-4 p-2"></i>Email</th>
                          <th><a href="{{route("admin.usersManagement",['sort_by'=>'role', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-4 p-2"></i>Role</th>
                          <th style="width: 40px" colspan="2" class="text-center">Action</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr class="align-middle">
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->role}}</td>
                          <td class="text-center">
                            <a href="{{route('admin.update_userID',$user->id)}}" class="btn btn-primary text-light">Update</a>
                            
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
  Delete
</button>

<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModal{{$user->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('admin.deleteUsers', $user->id) }}" method="POST" >
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    {{$users->appends(["sort_by" => $sort_by,"direction"=>$direction,"search"=>$searchByName])->links('pagination::bootstrap-5')}}
                  </div>
                </div>
                <!-- /.card -->
              </div>
             
              </div>
            </div>
          </div>
        </div>
      </main>

@endsection