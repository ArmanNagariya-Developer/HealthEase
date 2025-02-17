
@extends('layout.layout')
@section('content')
<main>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action={{route("authuser.login")}} method="post">
                @csrf
                <h3 class="text-center mt-3 mb-3" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Login</h3>
                @if (session('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Error:</strong> {{ session('loginError') }}
  </div>
@endif

                <!-- Email input -->
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        id="Email"
                        placeholder=""
                        value="{{old("email")}}"
                    />
                    <label for="Email">Email</label>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                
      
                <!-- Password input -->
                <div class="form-floating mb-3">
                    <input
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        id="password"
                        placeholder=""
                        value="{{old("password")}}"
                    />
                    <label for="password">Password</label>
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2 @error('terms') is-invalid @enderror" type="checkbox" value="1" id="form2Example3" name="terms" {{old('terms')?"checked":""}}/>
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                    @error('terms')
                    <span class="text-danger">*</span>
                @enderror
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

                    <p class="small fw-bold mt-2 pt-1 mb-0 text-end">Don't have an account? <a href="{{route("user.register")}}"
                        class="link-danger">Register</a></p>

                    <div class="divider  align-items-center my-2 ">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                      </div>

                    <div class="d-flex flex-row align-items-center justify-content-center ">
                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                          <i class="fa fa-google"></i>
                        </button>
            
                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                          <i class="fa fa-twitter"></i>
                        </button>
            
                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                          <i class="fa fa-linkedin"></i>
                        </button>
                      </div>

                </div>
      
              </form>
            </div>
          </div>
        </div>
        
      </section>
</main>
@endsection