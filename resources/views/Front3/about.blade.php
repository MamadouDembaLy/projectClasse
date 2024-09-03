<!DOCTYPE html>
<html lang="en">
@include('Front3.pages.head')
<body>
    <!-- Preloader start -->
    @include('Front3.pages.preloader')
    <!-- Preloader end -->

	<!-- Header Area Start -->
	@include('Front3.pages.header')
	<!-- Header Area End -->
	<!-- Page Header Area Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header-content">
						<h2>About Us</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>{{$pageAbout->nom}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Area End -->
	<!-- About Area Start -->
	<div class="about-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 md-mb-30">
					<div class="about-left">
						<div class="about-image1">

							<div class="img-3 up-down-animate">
								<img src="assets/img/about-3.png" alt="">
							</div>

							<img src="{{asset('uploads/Page/'.$pageAbout->image)}}" alt="">

							<div class="img-2">
                                @foreach ($slidesTout as $slides)
                                <img src="{{asset('uploads/Slide/'.$slides->image)}}" alt="">

                                @endforeach
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="s-table">
						<div class="s-tablec">
							<div class="section-title">	<span>//  About Us</span>
								<h2>I believe We strong
									Team in the world</h2>
								<p class="p-color">{{$pageAbout->contenu}}</p>
								<div class="about-btn"> <a class="theme-btn" href="./{{$pageAbout->url}}">BETA GROUP SARL</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Area End -->
	<!-- Achievement Area Start -->
	<div class="achievement section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6">
					<div class="achievement-left section-title"> <span>// Achievement</span>
						<h2>Our Achievement
						& Experience</h2>
						<p>Mauris sed purus quis odio lacinia pellentesque id sodales nibh. Fusce sit amet turpis nulla. Vestibulum tristique sagittis arcu a auctor nulla site</p>
						<a class="theme-btn all-btn" href="work.html">Discover More</a>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row">
						<div class="col-sm-6 mb-30">
							<div class="achievement-item">
								<ul class="d-inline-flex align-items-center">
									<li><i class="flaticon-building"></i>
									</li>
									<li><span class="counter">250</span>
										<p class="counter-title">Project Done</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 mb-30">
							<div class="achievement-item">
								<ul class="d-inline-flex align-items-center">
									<li><i class="flaticon-management"></i>
									</li>
									<li><span class="counter">21</span>
										<p class="counter-title">Team Member</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6 sm-mb-30">
							<div class="achievement-item">
								<ul class="d-inline-flex align-items-center">
									<li><i class="flaticon-trophy"></i>
									</li>
									<li><span class="counter">99</span>
										<p class="counter-title">National Award</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="achievement-item">
								<ul class="d-inline-flex align-items-center">
									<li><i class="flaticon-team"></i>
									</li>
									<li><span class="counter">346</span>
										<p class="counter-title">Client Happy</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Achievement Area End -->

    <!-- Work Area Start -->
    <div class="our-work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title algin-center"> <span>//  Photos Gallery</span>
                        <h2>Our Recent Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="work-item">
                        <img src="assets/img/work-1.jpg" alt="">
                        <div class="work-overly">
                            <h3><a href="work-details.html">Infrastructure</a></h3>
                            <p>Infrastructure Building</p>
                            <div class="overlay-plus">
                                <a class="img-popup" href="assets/img/work-1.jpg"> <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="work-item">
                        <img src="assets/img/work-2.jpg" alt="">
                        <div class="work-overly">
                            <h3><a href="work-details.html">Infrastructure</a></h3>
                            <p>Infrastructure Building</p>
                            <div class="overlay-plus">
                                <a class="img-popup" href="assets/img/work-2.jpg"> <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="work-item">
                        <img src="assets/img/work-3.jpg" alt="">
                        <div class="work-overly">
                            <h3><a href="work-details.html">Infrastructure</a></h3>
                            <p>Infrastructure Building</p>
                            <div class="overlay-plus">
                                <a class="img-popup" href="assets/img/work-3.jpg"> <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 lg-mb-30">
                    <div class="work-item">
                        <img src="assets/img/work-4.jpg" alt="">
                        <div class="work-overly">
                            <h3><a href="work-details.html">Infrastructure</a></h3>
                            <p>Infrastructure Building</p>
                            <div class="overlay-plus">
                                <a class="img-popup" href="assets/img/work-4.jpg"> <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 sm-mb-30">
                    <div class="work-item">
                        <img src="assets/img/work-5.jpg" alt="">
                        <div class="work-overly">
                            <h3><a href="work-details.html">Infrastructure</a></h3>
                            <p>Infrastructure Building</p>
                            <div class="overlay-plus">
                                <a class="img-popup" href="assets/img/work-5.jpg"> <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="work-item">
                        <img src="assets/img/work-6.jpg" alt="">
                        <div class="work-overly">
                            <h3><a href="work-details.html">Infrastructure</a></h3>
                            <p>Infrastructure Building</p>
                            <div class="overlay-plus">
                                <a class="img-popup" href="assets/img/work-6.jpg"> <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Area End -->
	<!-- Team Area Start -->
	<div class="team section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title algin-center"><span>// Our Expert</span>
						<h2>Senior Team Member</h2>
					</div>
				</div>
			</div>
			<div class="row">
                @foreach ($teams as $team)
				<div class="col-lg-3 col-md-6 md-mb-30">
					<div class="team-member">
						<img src="{{asset('uploads/equipe/'.$team->image)}}" alt="">
						<div class="team-content">
							<h3>{{$team->prenom.' '.$team->nom }}</h3>
							<p>{{$team->poste}}</p>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- Team Area End -->

	<!-- Footer Area Start -->
	@include('Front3.pages.footer')
	<!-- Footer Area End -->

	<!-- Footer Bottom Area End -->
	@include('Front3.pages.js')
</body>

</html>
