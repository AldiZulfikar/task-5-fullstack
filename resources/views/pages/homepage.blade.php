<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>ABP Lawfirm</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="Free HTML Templates" name="keywords" />
		<meta content="Free HTML Templates" name="description" />

		<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon" />

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
			rel="stylesheet"
		/>

		<!-- Icon Font Stylesheet -->
		<link
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
			rel="stylesheet"
		/>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
			rel="stylesheet"
		/>

		<!-- Libraries Stylesheet -->
		<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('lib/animate/animate.min.css" rel="stylesheet')}}" />

		<!-- Customized Bootstrap Stylesheet -->
		<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Template Stylesheet -->
		<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
	</head>

	<body class="bg-body">
		<!-- Spinner Start -->
		<div
			id="spinner"
			class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
		>
			<div class="spinner"></div>
		</div>
		<!-- Spinner End -->

		<!-- Navbar & Carousel Start -->
		<div class="container-fluid position-relative p-0">
			<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
				<a href="" class="navbar-brand p-0">
					{{-- <h3 class="m-0 text-primary"><i class="fa fa-user-tie me-2"></i>ABP Lawfirm</h3> --}}
					<img class="logo" src="{{asset('/img/user-foto.jpg')}}" alt="">
				</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse"
				>
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto py-0">
						<a href="" class="nav-item nav-link">Home</a>
						<a href="#blog" class="nav-item nav-link">Blog</a>
					</div>
				</div>
			</nav>
		</div>
		<!-- Navbar & Carousel End -->

		<!-- Full Screen Search Start -->
		<div class="modal fade" id="searchModal" tabindex="-1">
			<div class="modal-dialog modal-fullscreen">
				<div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
					<div class="modal-header border-0">
						<button
							type="button"
							class="btn bg-white btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div
						class="modal-body d-flex align-items-center justify-content-center"
					>
						<div class="input-group" style="max-width: 600px">
							<input
								type="text"
								class="form-control bg-transparent border-primary p-3"
								placeholder="Type search keyword"
							/>
							<button class="btn btn-primary px-4">
								<i class="bi bi-search"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Full Screen Search End -->

		<!-- Blog Start -->
		<div id="blog" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div
					class="section-title text-center position-relative pb-3 mb-5 mx-auto"
					style="max-width: 600px"
				>
					<h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
					<h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
				</div>
				<div class="row g-5">
					@foreach ($article as $data)
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
						<div class="blog-item bg-dark rounded overflow-hidden">
							<div class="blog-img position-relative overflow-hidden">
								<img class="img-fluid" src="{{$data->image ? asset('upload/' .$data->gambar_article) : asset('/img/article.png')}}" alt="" />
							</div>
							<div class="p-4">
								<div class="d-flex mb-3">
									<small class="me-3"
										><i class="far fa-user text-primary me-2"></i>{{ $data->users->name }}</small
									>
									<small
										><i class="far fa-calendar-alt text-primary me-2"></i>{{\Carbon\Carbon::parse($data->created_at)->format('d F Y')}}</small
									>
								</div>
								<h4 class="mb-3">{{$data->title}}</h4>
								{{ $data->category->name }}
								<p>
									{{Str::limit($data->content, 90)}}
								</p>
								<a class="text-uppercase" href="/baca-article/{{$data->id}}"
									>Read More <i class="bi bi-arrow-right"></i
								></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Blog Start -->

		<!-- Footer Start -->
		<div class="container-fluid text-white" style="background: #180A0A">
			<div class="container text-center">
				<div class="row justify-content-end">
					<div class="col-lg-12 col-md-12">
						<div
							class="d-flex align-items-center justify-content-center"
							style="height: 75px"
						>
							<p class="mb-0">
								&copy;
								<a class="text-white border-bottom" href="#">Aldi Zulfikar</a>.
								All Rights Reserved
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"
			><i class="bi bi-arrow-up"></i
		></a>

		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="{{ asset('lib/wow/wow.min.js')}}"></script>
		<script src="{{ asset('lib/easing/easing.min.js')}}"></script>
		<script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
		<script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
		<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
		<!-- style switcher js -->
		<script src="{{ asset('js') }}/style-switcher.js"></script>

		<!-- Template Javascript -->
		<script src="{{ asset('js/main.js')}}"></script>
	</body>
</html>
