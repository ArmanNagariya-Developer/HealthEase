	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col d-flex justify-content-start pb-2">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="https://github.com/ArmanNagariya-Developer"
								class="d-flex align-items-center justify-content-center bgcolor"><span
									class="bi bi-github"><i class="sr-only">GitHub</i></span></a>
							<a href="https://www.linkedin.com/in/arman-nagariya-378639253/"
								class="d-flex align-items-center justify-content-center bgcolor"><span
									class="bi bi-linkedin"><i class="sr-only">Linkedin</i></span></a>
							<a href="https://mainownweb.netlify.app/"
								class="d-flex align-items-center justify-content-center"><span class="bi bi-globe"><i
										class="sr-only">Website</i></span></a>
							<a href="https://stackoverflow.com/users/23572007/arman-nagariya"
								class="d-flex align-items-center justify-content-center"><span
									class="bi bi-stack-overflow"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
				<div class="col d-flex justify-content-end ">
				<a href="{{route("cart.view")}}" class="text-dark text-decoration-none mt-1 fs-5"><i class="bi bi-cart me-3 mt-3"></i></a>	
					@if (Auth::check())
					<div class="btn p-0">
					Welcome, {{Auth::user()->name}} <a href="{{route("user.logout")}}"><button type="button" class="btn btn-outline-danger ">Logout</button></a>
					</div>
					@else
					<div class="btn p-0">
						<a href="{{route('user.login')}}"><button type="button" class="btn btn-outline-secondary">Login</button></a>
						<a href="{{route("user.register")}}"><button type="button" class="btn btn-outline-secondary">Register</button></a>
					</div>
					@endif
					
				</div>
			
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container shadow-lg ">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
					aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<form action="#" class="searchform order-lg-last">
					<div class="form-group d-flex">
						<input type="text" class="form-control pl-3" placeholder="Search">
						<button type="submit" placeholder="" class="form-control search"><span
								class="fa fa-search"></span></button>
					</div>
				</form>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav mr-auto">
						<div class="col">
							<a class="navbar-brand text-dark " href="{{route("welcome")}}" style="padding-bottom: 0px;margin-bottom: 0px;padding-top: 20px;">HealthEase <span>Online</span></a>
						</div>
						<li class="nav-item" style="background-color: rgb(0, 140, 255);">
							<a href="{{route("welcome")}}"
								class="nav-link">Home</a></li>
								<li class="nav-item dropdown">
									<a class="nav-link " href="{{route('appointment')}}" id="dropdown04" role="button" 
									   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									   Appointment
									</a>
								  </li>
								  
						<li class="nav-item"><a href="{{route('appointment')}}" class="nav-link">Doctors</a></li>
						<li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="{{route("aboutus")}}" class="nav-link">About Us</a></li>
						<li class="nav-item"><a href="{{ route('medicine.store')}}" class="nav-link">Store</a></li>
						<li class="nav-item"><a href="{{ route('appointment.myAppointments')}}" class="nav-link">My Appointment</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->
        @vite("resources/js/app.js")

	</section>
