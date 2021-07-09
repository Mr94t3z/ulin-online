@extends('template_blog.content')

@section('isi')
<link type="text/css" rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}" />
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div class="hero-container" data-aos="fade-up">
		<h1>Welcome Fellas!</h1>
		<h2>Website wisata online daerah bandung</h2>
		<a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container">

			<div class="row no-gutters">
				<div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
					<div class="content">
						<h3>Ulin atuh da bisa!</h3>
						<p>
							Aplikasi ini bertujuan untuk dapat mempermudah di dalam sektor gaya hidup keluarga yang menyajikan pencarian untuk beragam tempat wisata dan kegiatan, konektivitas, serta direktori kuliner yang ada.
						</p>
						<a href="#services" class="about-btn">Gaskeun<i class="bx bx-chevron-right"></i></a>
					</div>
				</div>
				<div class="col-xl-7 d-flex align-items-stretch">
					<div class="icon-boxes d-flex flex-column justify-content-center">
						<div class="row">
							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
								<i class="bx bx-receipt"></i>
								<h4>Peraturan</h4>
								<p>Patuhi beberapa peraturan yang telah ditetapkan di setiap wisata.</p>
							</div>
							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
								<i class="bx bx-cube-alt"></i>
								<h4>Kolaborasi</h4>
								<p>Beberapa pihak yang mendukung kami.</p>
							</div>
							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
								<i class="bx bx-images"></i>
								<h4>Spot Foto</h4>
								<p>Beberapa tempat wisata tentunya memiliki banyak sekali spot foto.</p>
							</div>
							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
								<i class="bx bx-shield"></i>
								<h4>Keamanan</h4>
								<p>Selalu menggunakan masker kemanapun Anda pergi di saat pandemi ini.</p>
							</div>
						</div>
					</div><!-- End .content-->
				</div>
			</div>

		</div>
	</section><!-- End About Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services">
		<div class="container">

			<div class="section-title" data-aos="fade-in" data-aos-delay="100">
				<h2>Wisata</h2>
				<form action="#services" method="GET">
					<div class="input-group mt-5">
						<input type="text" class="form-control" name="cari" placeholder="Cari tempat wisata yang akan anda kunjungi" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-info text-muted" type="submit" id="button-addon2">Search</button>
						</div>
					</div>
				</form>
			</div>


			<div class="row">
				@foreach($data as $post_terbaru)
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-5">
					<div class="icon-box" data-aos="fade-up">
						<img class="card-img-top mb-3" src="{{ $post_terbaru->gambar }}" alt="Card image cap">
						<h4 class="title"><a href="#">{{ $post_terbaru->judul }}</a></h4>
						<p class="description">{{ $post_terbaru->content }}</p>
						<p class="mt-3"><strong>{{ $post_terbaru->created_at->diffForHumans() }}</strong></p>
					</div>
				</div>
				@endforeach
			</div>


		</div>
	</section><!-- End Services Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts  section-bg">
		<div class="container">

			<div class="row no-gutters">

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="bi bi-emoji-smile"></i>
						<span data-purecounter-start="0" data-purecounter-end="234" data-purecounter-duration="1" class="purecounter"></span>
						<p><strong>Happy Clients</strong></p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="bi bi-journal-richtext"></i>
						<span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
						<p><strong>Projects</strong></p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="bi bi-headset"></i>
						<span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
						<p><strong>Hours Of Support</strong></p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="bi bi-people"></i>
						<span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
						<p><strong>Hard Workers</strong></p>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Counts Section -->

	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta">
		<div class="container" data-aos="zoom-in">

			<div class="text-center">
				<h3>Ulin Online</h3>
				<p> Ulin Online merupakan sebuah web yang menyediakan informasi mengenai tempat tempat wisata di daerah bandung yang memudahkan wisatawan hanya melalui web tanpa harus mengecek tempat nya langsung. </p>
				<a class="cta-btn" href="#">Let's Go!</a>
			</div>

		</div>
	</section><!-- End Cta Section -->

	<!-- ======= Portfolio Section ======= -->
	<section id="portfolio" class="portfolio">
		<div class="container">

			<div class="section-title" data-aos="fade-in" data-aos-delay="100">
				<h2>Portfolio</h2>
				<p>Portofolio komprehensif yang dimiliki aplikasi ini termasuk pencarian wisata terdekat, tarif harga tiket tempat wisata, seperti biaya parkir untuk kendaraan, tempat penginapan jika tersedia termasuk homestay, resort, dan villa.</p>
			</div>

			<div class="row" data-aos="fade-in">
				<div class="col-lg-12 d-flex justify-content-center">
					<ul id="portfolio-flters">
						<li data-filter="*" class="filter-active">Semua</li>
						<li data-filter=".filter-app">Villa</li>
						<li data-filter=".filter-card">Kuliner</li>
					</ul>
				</div>
			</div>

			<div class="row portfolio-container" data-aos="fade-up">

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="{{ asset('frontend/img/portfolio/villa-1.jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('frontend/img/portfolio/villa-1.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Penginapan Villa"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="{{ asset('frontend/img/portfolio/wisata-1.jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('frontend/img/portfolio/wisata-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tempat Wisata"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="{{ asset('frontend/img/portfolio/villa-2.jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('frontend/img/portfolio/villa-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Penginapan Villa"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="{{ asset('frontend/img/portfolio/kuliner-1.jpeg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('/frontend/img/portfolio/kuliner-1.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wisata Kuliner"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="{{ asset('/frontend/img/portfolio/wisata-2.jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('assets/img/portfolio/wisata-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tempat Wisata"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="{{ asset('/frontend/img/portfolio/villa-3.jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('/frontend/img/portfolio/villa-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Penginapan Villa"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="{{ asset('/frontend/img/portfolio/kuliner-2.jpeg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('/frontend/img/portfolio/kuliner-2.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wisata Kuliner"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="{{ asset('/frontend/img/portfolio/kuliner-3.jpeg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('/frontend/img/portfolio/kuliner-3.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wisata Kuliner"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="{{ asset('/frontend/img/portfolio/wisata-3.jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-links">
							<a href="{{ asset('/frontend/img/portfolio/wisata-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tempat Wisata"><i class="bx bx-plus"></i></a>
							<a href="#" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Portfolio Section -->

	<!-- ======= Testimonials Section ======= -->
	<section id="testimonials" class="testimonials section-bg">
		<div class="container">

			<div class="section-title" data-aos="fade-in" data-aos-delay="100">
				<h2>Feedback</h2>
				<p>Beberapa masukan dan saran dari pengguna yang pernah mencoba aplikasi ini.</p>
			</div>

			<div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Jaga kesehatan kamu kawan, lupakan masa lalu mu.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="{{ asset('frontend/img/testimonials/ummam.jpeg') }}" class="testimonial-img" alt="">
							<h3>Khoirul Ummam</h3>
							<h4>Activist & Enthusiasm</h4>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Aku suka aplikasi ini dan suka sama yang bikin nya juga :)
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="{{ asset('frontend/img/testimonials/zahra.jpeg') }}" class="testimonial-img" alt="">
							<h3>Azzahraida</h3>
							<h4>Traveler Phobia</h4>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Jadilah wanita hebat, jangan banyak omong. Lakukan!
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="{{ asset('frontend/img/testimonials/sinta.jpg') }}" class="testimonial-img" alt="">
							<h3>Sinta Amelia</h3>
							<h4>Hikers & Nature Lovers</h4>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								The journey was amazing and I saw something beautiful in it. The island that makes me want to learn more.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="{{ asset('frontend/img/testimonials/iqbal.jpeg') }}" class="testimonial-img" alt="">
							<h3>Iqbal Putra Ramadhan</h3>
							<h4>Collage Student</h4>
						</div>
					</div><!-- End testimonial item -->

				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section><!-- End Testimonials Section -->

	<!-- ======= Team Section ======= -->
	<section id="team" class="team">
		<div class="container">

			<div class="section-title" data-aos="fade-in" data-aos-delay="100">
				<h2>Team</h2>
				<p>Aplikasi ini dibuat dengan berbasis web yang dirancang untuk memudahkan pengguna dalam pencarian lokasi wisata terdekat secara realtime. Dengan adanya aplikasi ini diharapkan dapat membantu pengguna dalam mencari lokasi wisata dengan mudah secara online dan akurat.</p>
			</div>

			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="member" data-aos="fade-up">
						<div class="pic"><img src="{{ asset('frontend/img/team/taopik.jpg') }}" class="img-fluid" alt="">
						</div>
						<div class="member-info">
							<h4>Muhamad taopik</h4>
							<span>1197050081</span>
							<div class="social">
								<a href="https://www.twitter.com/mr94t3z"><i class="bi bi-twitter"></i></a>
								<a href="https://www.facebook.com/mr.94t3z"><i class="bi bi-facebook"></i></a>
								<a href="https://instagram.com/m.taopik_"><i class="bi bi-instagram"></i></a>
								<a href="https://www.linkedin.com/in/muhamad-taopik-8b0746174"><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="member" data-aos="fade-up" data-aos-delay="150">
						<div class="pic"><img src="{{ asset('frontend/img/team/fahmi.jpeg') }}" class="img-fluid" alt=""></div>
						<div class="member-info">
							<h4>Fahmi Nur Sidiq</h4>
							<span>1197050036</span>
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="member" data-aos="fade-up" data-aos-delay="300">
						<div class="pic"><img src="{{ asset('frontend/img/team/alia.jpg') }}" class="img-fluid" alt=""></div>
						<div class="member-info">
							<h4>Alia Fadhilatun Nisa</h4>
							<span>1197050011</span>
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="member" data-aos="fade-up" data-aos-delay="300">
						<div class="pic"><img src="{{ asset('frontend/img/team/pauzy.jpeg') }}" class="img-fluid" alt=""></div>
						<div class="member-info">
							<h4>Pauzy Rizal Effendi</h4>
							<span>1197050105</span>
							<div class="social">
								<a href=""><i class="bi bi-twitter"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""><i class="bi bi-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Team Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact section-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Contact</h2>
				<p>Anda bisa menghubungi kami jika memiliki kendala.</p>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="info-box mb-4">
						<i class="bx bx-map"></i>
						<h3>Our Address</h3>
						<p>Jl. A.H. Nasution No. 105A Cibiru, Bandung, Jawa Barat, Indonesia</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="info-box  mb-4">
						<i class="bx bx-envelope"></i>
						<h3>Email Us</h3>
						<p>1197050081@student.uinsgd.ac.id</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="info-box  mb-4">
						<i class="bx bx-phone-call"></i>
						<h3>Call Us</h3>
						<p>+62 8221 4760 288</p>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-lg-6 ">
					<iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=Bandung&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
				</div>

				<div class="col-lg-6">
					<form action="forms/contact.php" method="post" role="form" class="php-email-form">
						<div class="row">
							<div class="col-md-6 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
							</div>
							<div class="col-md-6 form-group mt-3 mt-md-0">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
						</div>
						<div class="form-group mt-3">
							<textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
						</div>
						<div class="my-3">
							<div class="loading">Loading</div>
							<div class="error-message"></div>
							<div class="sent-message">Your message has been sent. Thank you!</div>
						</div>
						<div class="text-center"><button type="submit">Send Message</button></div>
					</form>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- /row -->
@endsection