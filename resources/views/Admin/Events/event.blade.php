@extends('Admin.layout.layout')

@section("content")


 <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Event List</h3></div>
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
         <form method="GET" action="{{ route('admin.events') }}" class="m-3">
    <div class="row d-flex flex-row">
        <div class="col-sm-3">
            <input type="date" name="event_date" class="form-control" value="{{ old('event_date', request('event_date')) }}">
        </div>
        <div class="col-sm-3 ">
            <button type="submit" class="btn btn-primary">Filter by Event Date</button>
            <a href="{{ route('admin.events') }}" class="btn btn-danger">Clear</a>
        </div>
        <div class="col-sm-3">
            <input type="text" name="search" class="form-control" value="{{ old('search', request('search')) }}" placeholder="Search events">
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Search Events</button>
        </div>
    </div>
</form>

@if(session("Success"))
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
                  <div class="card-header"><h3 class="card-title">List Of Events </h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 90px"><a href="{{route("admin.events",['sort_by'=>'id', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Id</a></th>
                          <th style="width: 150px"><a href="{{route("admin.events",['sort_by'=>'title', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Title</a></th>
                          <th>Event Image</th>
                          <th style="width: 200px"><a href="{{route("admin.events",['sort_by'=>'description', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Description</a></th>
                          <th style="width: 150px"><a href="{{route("admin.events",['sort_by'=>'event_date', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Event Date</a></th>
                          <th style="width: 150px"><a href="{{route("admin.events",['sort_by'=>'event_time', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Event Time</a></th>
                          <th style="width: 150px"><a href="{{route("admin.events",['sort_by'=>'location', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Location</a></th>
                          <th style="width: 150px"><a href="{{route("admin.events",['sort_by'=>'price', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Price</a></th>
                          <th style="width: 250px"><a href="{{route("admin.events",['sort_by'=>'max_attendees', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc','event_date'=>request('event_date'),'search'=>request('search'),'page'=>request('page')])}}" class="text-dark text-decoration-none"><i class="bi bi-sort-alpha-{{request('direction')=='asc'?'up':'down'}} fs-5"></i>Max Attendees</a></th>
                          <th style="width: 0px" colspan="2" class="text-center">Action</th>                          
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($events as $event )
                        <tr class="align-middle">
                          <td>{{$event->id}}</td>
                          <td>{{$event->title}}</td>
                          <td class="text-center" ><img src="{{ asset('storage/event_images/'.$event->image_url) }}" width="120px" ></td>
                          <td>{{$event->description}}</td>
                          <td>{{$event->event_date}}</td>
                          <td>{{$event->event_time}}</td>
                          <td>{{$event->location}}</td>
                          <td>Rs.{{$event->price}}</td>
                          <td>{{$event->max_attendees}}</td>
                          <td>
                            <a href="{{route('admin.update_eventID',$event->id)}}" class="btn btn-primary text-light">Update</a>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$event->id}}">
                            Delete
                            </button>

<div class="modal fade" id="exampleModal{{$event->id}}" tabindex="-1" aria-labelledby="exampleModal{{$event->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this event?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('admin.delete_event', $event->id) }}" method="POST" >
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
                          <td colspan="10" class="text-center">No Data Found</td>  

                        @endforelse
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
{{$events->appends([
    'event_date' => $date ?? null,
    'sort_by' => request('sort_by'),
    'direction' => request('direction'),
    'search' => request('search')
])->links('pagination::bootstrap-5')}}
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