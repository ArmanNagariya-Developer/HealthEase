
@extends('layout.layout')
@section('content')
            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <form action="{{route("adduser.register")}}" method="POST">
                                @csrf
                                <h3 class="text-center mt-3 mb-3"
                                    style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                    Register</h3>
        
                                <!-- Name input -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control " name="name" id="name" placeholder="" />
                                    <label for="formId1">Name</label>
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </div>
        
        
                                <!-- Email Input -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="" />
                                    <label for="email">Email</label>
                                    @error('email')
                                    {{$message}}
                                @enderror
                                </div>
        
                                <!-- Gender -->
                                <div class="form-group d-flex align-items-center mb-3" style="max-width: 400px;">
                                    <label class="me-3 font-weight-bold" style="min-width: 120px;">Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male"/>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female"/>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    @error('gander')
                                    {{$message}}
                                @enderror
                                </div>
        
                                <!-- Date of Birth -->
                                <div class="form-group d-flex align-items-center mb-3" style="max-width: 400px;">
                                    <label for="dob" class="me-3 font-weight-bold" style="min-width: 120px;">Date of
                                        Birth:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control" id="dob" name="date_of_birth"
                                            placeholder="Select your date of birth" required />
                                    </div>
                                    @error('date_of_birth')
                                    {{$message}}
                                @enderror
                                </div>
        
        
                                <!-- Password input -->
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="" />
                                    <label for="formId1">Password</label>
                                    @error('password')
                                    {{$message}}
                                @enderror
                                </div>
        
                                <!-- Confirm Password input -->
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password_confirmation" placeholder="" />
                                    <label for="formId1">Confirm Password</label>
                                </div>
        
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                        <label class="form-check-label" for="form2Example3">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#!" class="text-body">Forgot password?</a>
                                </div>
        
                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" 
                                        class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0 text-end">You have an account? <a href="{{route("user.login")}}" class="link-danger">Login</a></p>
        
                                    <div class="divider  align-items-center my-2 ">
                                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                    </div>
        
                                    <div class="d-flex flex-row align-items-center justify-content-center ">
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary btn-floating mx-1">
                                            <i class="fa fa-google"></i>
                                        </button>
        
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary btn-floating mx-1">
                                            <i class="fa fa-twitter"></i>
                                        </button>
        
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary btn-floating mx-1">
                                            <i class="fa fa-linkedin"></i>
                                        </button>
                                    </div>
        
                                </div>
        
                            </form>
                        </div>
                    </div>
                </div>
        
            </section>
       @endsection