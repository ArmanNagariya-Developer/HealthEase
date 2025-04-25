@extends('Admin.layout.layout')

@section("content")

      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Create Event</h3></div>
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
                  <div class="card-header"><div class="card-title"> Add Events </div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{route("admin.update_event",$findEvent->id)}}" method="post" enctype="multipart/form-data">
                    <!--begin::Body-->
                    @method("put")
                    @csrf

                    <div class="card-body">

<div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Category</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="event_category_id">
                                            @forelse ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('event_category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
                                                </option>

                                            @empty
                                                <option value="3" disabled>no data found</option>
                                            @endforelse
                                        </select>
                                    </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input
                          type="text"
                          class="form-control @error("title")
                              is-invalid
                          @enderror"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          name="title"
                          value="{{old('title',$findEvent->title)}}"
                        />
                                         @error("title")
                            <span class="text-danger">{{$message}}</span> 
                          @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <input
                          type="text"
                          class="form-control @error("description")
                              is-invalid
                          @enderror"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          name="description"
                          value="{{old('description',$findEvent->description)}}"

                        />
                                                      @error("description")
                            <span class="text-danger">{{$message}}</span> 
                          @enderror
                      </div>
                      <div class="mb-3">
    <label for="event_date" class="form-label">Event Date</label>
    <input
        type="text"
        class="form-control @error('event_date') is-invalid @enderror"
        id="event_date"
        aria-describedby="event_date_help"
        name="event_date"
        placeholder="yyyy-mm-dd"
        value="{{ old('event_date',$findEvent->event_date) }}"
    />
    @error('event_date')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Event Time</label>
                        <input
                          type="text"
                          class="form-control @error("event_time")
                              is-invalid
                          @enderror"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          name="event_time"
                          value="{{old('event_time',$findEvent->event_time)}}"
                          
                        />
                                            @error("event_time")
                            <span class="text-danger">{{$message}}</span> 
                          @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Location</label>
                        <input
                          type="text"
                          class="form-control @error("location")
                              is-invalid
                          @enderror"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          name="location"
                          value="{{old('location',$findEvent->location)}}"
                          
                        />
                        @error("location")
                            <span class="text-danger">{{$message}}</span> 
                          @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input
                          type="text"
                          class="form-control @error("price")
                              is-invalid
                          @enderror"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          name="price"
                          value="{{old('price',$findEvent->price)}}"
                          
                        />
                        @error("price")
                            <span class="text-danger">{{$message}}</span> 
                          @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Maximum Attendees</label>
                        <input
                          type="text"
                          class="form-control @error("max_attendees")
                              is-invalid
                          @enderror"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          name="max_attendees"
                           value="{{old('max_attendees',$findEvent->max_attendees)}}"
                            />
                            @error("max_attendees")
                            <span class="text-danger">{{$message}}</span> 
                          @enderror
                      </div>

                      <div class="input-group ">
                        <input type="file" class="form-control @error("image_url")
                              is-invalid
                          @enderror" id="inputGroupFile02" name="image_url" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        
                    </div>


                      <div class="input-group ">
                     
                        <table> 
                            <tr>
                                <td>
                                    Image 
                                </td>
                                <td>
                                     <img src="{{ asset('/storage/event_images/'. $findEvent->image_url) }}" width="100px">
                                    <input type="hidden" name="image_url_hidden" value="{{$findEvent->image_url}}">

                                </td>
                            </tr>
                        </table>
                        
                    </div>
                   
                          @error("image_url")
                             <div class="text-danger mb-3">{{$message}}</div> 
                          @enderror
                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
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