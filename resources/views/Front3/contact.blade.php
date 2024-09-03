<!DOCTYPE html>
<html lang="en">
@include('Front3.pages.head')
<body>
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
						<h2>Contact</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>{{$contact->nom}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Area End -->
	<!-- Contact Area Start -->
	<div class="contact-area section-padding">
		<div class="container">
            @foreach ($coordonnes as $coord)
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
					<div class="contact-item">
						<ul class="d-inline-flex align-items-center">
							<li><i class="flaticon-call"></i>
							</li>
							<li>
								<h3>Call Us</h3>
								<p>{{$coord->tel}}</p>

							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 sm-mb-30">
					<div class="contact-item">
						<ul class="d-inline-flex align-items-center">
							<li><i class="flaticon-envelope"></i>
							</li>
							<li>
								<h3>Email Drop Us</h3>
								<p>{{$coord->email}}</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="contact-item">
						<ul class="d-inline-flex align-items-center">
							<li><i class="flaticon-pin"></i>
							</li>
							<li>
								<h3>Adresse</h3>
								<p>{{$coord->adresse}}</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
	<!-- Contact Area End -->
	<!-- Get In touch Area Start -->
	<div class="get-in-touch section-padding pt-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="form-left md-mb-40">
						<div class="get-in-touch-left section-title mb-15"> <span>\\ Get In touch</span>
							<h2>We are always Ready for your solution</h2>
							<p>Mauris sed purus quis odio lacinia pellentesque id sodales nibh. Fusce sit amet turpis nulla. Vestibulum tristique sagittis arcu a auctor nulla site</p>
						</div>
						<div class="follow-us">
							<h4 class="mb-20">Follow Us :</h4>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-instagram"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="form-right">
						<div class="form-title">
							<h3>Get in Touch with us</h3>
						</div>
						<div class="comment-form mt-40">
							<form class="form"  action="{{ route('contact.store')}}" method="POST" >
                                @csrf
								<div class="row">
                                    <div class="col-md-12">
                                        @if (session()->has('message'))
                                            <div class="alert alert-icon alert-success">{{ session('message') }}</div>
                                        @endif

                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-icon alert-danger">{{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="nom" placeholder="Your Name" required="required" name="nom" >
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" name="email" placeholder="Your Email" required="required" name="email" >
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="sujet" placeholder="Subject" required="required" name="sujet" >
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<textarea name="message" rows="3" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="submit" class="theme-btn">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Get In touch Area End -->
	<!-- Map Area Start -->
	<div class="contact-map">
        @foreach ($coordonnes as $coord)
		<iframe src="{{$coord->localisation}}}"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        @endforeach
	</div>
	<!-- Map Area End -->
	<!-- Footer Area Start -->
	@include('Front3.pages.footer')

	<!-- Footer Bottom Area End -->
    @include('Front3.pages.js')
</body>

</html>
