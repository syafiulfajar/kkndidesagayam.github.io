<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<main id="main">

		<!-- ======= Jumbotron ======= -->
		<div class="jumbotron jumbotron-fluid" id="home">
			<div class="container text-center" style="padding-top: 30px;">
				<h1 class="display-4">KKN DI DESA GAYAM</h1>
				<p class="lead">Selamat datang di website portfolio KKN Desa Gayam. Website ini merupakan platform publikasi kegiatan KKN selama satu bulan di Desa Gayam, Panggul, Trenggalek oleh mahasiswa Universitas Islam Negeri Sayyid Ali Rahmatullah Tulungagung tahun 2022.</p>
			</div>
		</div>
		<!-- ======= Akhir Jumbotron ======= -->

		<!-- ======= Hero Slider Section ======= -->
		<section id="hero-slider" class="hero-slider">
			<div class="container-md" data-aos="fade-in">
				<div class="row">
					<div class="col-12">
						<div class="swiper sliderFeaturedPosts">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/gambar1.png');">
										<div class="img-bg-inner">
										</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/gambar2.png');">
										<div class="img-bg-inner">
										</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/gambar4.jpg');">
										<div class="img-bg-inner">
										</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/gambar5.jpg');">
										<div class="img-bg-inner">
										</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/gambar3.png');">
										<div class="img-bg-inner">
										</div>
									</a>
								</div>

								<div class="swiper-slide">
									<a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/gambar6.jpg');">
										<div class="img-bg-inner">
										</div>
									</a>
								</div>

							</div>
							<div class="custom-swiper-button-next">
								<span class="bi-chevron-right"></span>
							</div>
							<div class="custom-swiper-button-prev">
								<span class="bi-chevron-left"></span>
							</div>

							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<center>
				<div><a href="<?= site_url('page/about') ?>" class="more">Lihat Dokumentasi lainnya</a></div>
				</div>
			</center>
		</section>

		<!-- ======= End Hero Slider Section ======= -->

		<!-- ======= Berita ======= -->
		<!-- <section class="category-section">
			<div class="container" data-aos="fade-up">

				<div class="section-header d-flex justify-content-between align-items-center mb-5">
					<h2>Berita</h2>
				</div>

				<div class="row">
					<div class="col-md-12">

						<div class="d-lg-flex post-entry-2">
							<a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
								<img src="assets/img/gambar1.png" alt="" class="img-fluid">
							</a>
							<div>
								<div class="post-meta"><span class="date">GAYAM 2</span> <span class="mx-1">&bullet;</span> <span>25 Juli 2022</span></div>
								<h3><a href="single-post.html">KKN Gelombang II UIN SATU Tulungagung Desa Gayam Panggul Resmi Dibuka, Kades Harapkan Adanya Inovasi dari Para Mahasiswa</a></h3>
								<p>Gayam, Panggul – 55 Mahasiswa Universitas Islam Negeri (UIN) Sayyid Ali Rahmatullah (SATU) Tulungagung mengadakan kegiatan pembukaan program Kuliah Kerja Nyata (KKN) reguler multisektoral gelombang II tahun 2022 di desa Gayam, Panggul, Trenggalek.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="post-entry-1 border-bottom">
									<a href="single-post.html"><img src="assets/img/gambar1.png" alt="" class="img-fluid"></a>
									<div class="post-meta"><span class="date">Gayam 2</span> <span class="mx-1">&bullet;</span> <span>25 Juli 2022</span></div>
									<h2 class="mb-2"><a href="single-post.html">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus, inventore eos.</a></h2>
									<p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
								</div>

								<div class="post-entry-1">
									<div class="post-meta"><span class="date">GAYAM 2</span> <span class="mx-1">&bullet;</span> <span>25 Juli 2022</span></div>
									<h2 class="mb-2"><a href="single-post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, facere dolores?</a></h2>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="post-entry-1">
									<a href="single-post.html"><img src="assets/img/gambar3.png" alt="" class="img-fluid"></a>
									<div class="post-meta"><span class="date">GAYAM 2</span> <span class="mx-1">&bullet;</span> <span>25 Juli 2022</span></div>
									<h2 class="mb-2"><a href="single-post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, cum accusamus!</a></h2>
									<p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<center>
				<div><a href=" <?=('article') ?>" class="more">Lihat Berita Lainnya</a></div>
			</center>
		</section> -->
		
		<!-- End Culture Category Section -->

		<!-- ======= Akhir Berita ======= -->
	</main>
				<!-- End #main -->


	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>