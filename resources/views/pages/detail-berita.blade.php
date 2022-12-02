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

		<!-- Topbar Start -->
		<div class="container-fluid bg-dark px-5 d-none d-lg-block">
			<div class="row gx-0">
				<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
					<div class="d-inline-flex align-items-center" style="height: 45px;">
						<small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(0254) 7926733</small>
						<small class="text-light"><i class="fa fa-envelope-open me-2"></i>abplawfirm2020@gmail.com</small>
					</div>
				</div>
				<div class="col-lg-4 text-center text-lg-end">
					<div class="d-inline-flex align-items-center" style="height: 45px;">
						<small class="me-3 text-light"><i class="fas fa-clock me-2"></i></i>Monday - Friday : 9.00 - 18.00</small>
					</div>
				</div>
			</div>
		</div>
		<!-- Topbar End -->

		<!-- Navbar & Carousel Start -->
		<div class="container-fluid position-relative p-0">
			<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
				<a href="" class="navbar-brand p-0">
					{{-- <h3 class="m-0 text-primary"><i class="fa fa-user-tie me-2"></i>ABP Lawfirm</h3> --}}
					<img class="logo" src="{{asset('/img/logo.png')}}" alt="">
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
						<a href="/" class="nav-item nav-link">Back to Home</a>
					</div>
				</div>
			</nav>
		</div>
		<!-- Navbar & Carousel End -->
        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <!-- Blog Detail Start -->
                        <div class="mb-5">
                            <img class="img-fluid w-100 rounded mb-5" src="{{$berita->gambar_berita ? asset('upload/' .$berita->gambar_berita) : asset('/img/berita.png')}}" alt="">
                            <h1 class="mb-4">{{$berita->judul}}</h1>
                            <p>{{$berita->konten}}</p>
                            <small><i class="far fa-user"></i> {{ $berita->users->name }}</small> <br>
                            <small> <i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($berita->created_at)->format('d F Y')}}</small>
                        </div>
                        <!-- Blog Detail End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        <!-- Footer Start -->
        <div
        class="container-fluid bg-dark text-light mt-5 wow fadeInUp"
        data-wow-delay="0.1s"
        >
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-3 col-md-12 pt-5 mb-5">
                            <div
                                class="section-title section-title-sm position-relative pb-3 mb-4"
                            >
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Jl. Raya Pandeglang, Karundang, Kec. Cipocok Jaya, Kota Serang, Banten 42126, Indonesia
                                    
                                    </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">abplawfirm2020@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">(0254) 7926733</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"
                                    ><i class="fab fa-linkedin-in fw-normal"></i
                                ></a>
                                <a class="btn btn-primary btn-square" href="https://www.instagram.com/abp_lawfirm/"
                                    ><i class="fab fa-instagram fw-normal"></i
                                ></a>
                            </div>
                        </div>
                
                        <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div
                                class="section-title section-title-sm position-relative pb-3 mb-4"
                            >
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div
                                class="link-animated d-flex flex-column justify-content-start"
                            >
                                <a class="text-light mb-2" href=""
                                    ><i class="bi bi-arrow-right text-primary me-2"></i>Home</a
                                >
                                <a class="text-light mb-2" href="#about"
                                    ><i class="bi bi-arrow-right text-primary me-2"></i>About
                                    Us</a
                                >
                                <a class="text-light mb-2" href="#service"
                                    ><i class="bi bi-arrow-right text-primary me-2"></i>Our
                                    Services</a
                                >
                                <a class="text-light" href="#contact"
                                    ><i class="bi bi-arrow-right text-primary me-2"></i>Contact
                                    Us</a
                                >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5" wow slideInUp" data-wow-delay="0.6s">
                            <div
                                class="section-title section-title-sm position-relative pb-3 mb-4"
                            >
                                <h3 class="text-light mb-0">Visit Our Office</h3>
                            </div>
                            <iframe
                                class="position-relative rounded w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10809.378117557533!2d106.16283903372573!3d-6.155569645632776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42231e2cbd4cc7%3A0x2bcf6d08dc6a9652!2sJl.%20Raya%20Pandeglang%2C%20Karundang%2C%20Kec.%20Cipocok%20Jaya%2C%20Kota%20Serang%2C%20Banten!5e0!3m2!1sid!2sid!4v1657631138198!5m2!1sid!2sid"
                                frameborder="0"
                                style="min-height: 250px; border: 0"
                                allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
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
                            <a class="text-white border-bottom" href="#">ABP Lawfirm</a>.
                            All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Footer End -->
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
@include('sweetalert::alert')
<!-- style switcher js -->
<script src="{{ asset('js') }}/style-switcher.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>