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
						<h2>Pricing Plans</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>Produit</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Area End -->
	<!-- Pricing Table Start -->
	<div class="pricing-area section-padding">
		<div class="container">
			<div class="row">
                @foreach ($produits as $prod)
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 my-5">
					<div class="pricing-item">
						<div class="pricing-header">
								<i class="flaticon-team"></i>
							<div class="pricing-price">
								<h4>{{$prod->nomProduit}}</h4>
								<h3 class="mt-10">{{$prod->pu}}<span> FCFA</span></h3>
							</div>
						</div>
						<div class="pricing-content mt-10">
							<ul>
								<li>{{$prod->Description}}</li>
							</ul>	<a class="theme-btn price-btn mt-25" href="">Discover More</a>
						</div>
					</div>
				</div>
                @endforeach
                <!--
				<div class="col-xl-4 col-lg-4 col-md-6 sm-mb-30">
					<div class="pricing-item box">
						<div class="pricing-header">
								<i class="flaticon-management fff"></i>
							<div class="pricing-price">
								<h4 class="fff">Free Plan</h4>
								<h3 class="mt-10 fff">$17.73 <span class="fff">Month</span></h3>
							</div>
						</div>
						<div class="pricing-content mt-10">
							<ul>
								<li>Strategy & Research</li>
								<li>Multi-Language Support</li>
								<li>Managment & Marketing</li>
								<li>Unlimited Feature</li>
								<li>24/7 Customer Support</li>
							</ul>	<a class="pri-btn mt-25" href="services.html">Discover More</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="pricing-item">
						<div class="pricing-header">
								<i class="flaticon-maintenance"></i>
							<div class="pricing-price">
								<h4>Premium Plan</h4>
								<h3 class="mt-10">$89.59 <span>Month</span></h3>
							</div>
						</div>
						<div class="pricing-content mt-10">
							<ul>
								<li>Strategy & Research</li>
								<li>Multi-Language Support</li>
								<li>Managment & Marketing</li>
								<li>Unlimited Feature</li>
								<li>24/7 Customer Support</li>
							</ul>	<a class="theme-btn price-btn mt-25" href="services.html">Discover More</a>
						</div>
					</div>
				</div>
            -->
			</div>
		</div>
	</div>
	<!-- Pricing Table End -->

	<!-- Footer Area Start -->
	@include('Front3.pages.footer')
	<!-- Footer Bottom Area End -->

	@include('Front3.pages.js')
</body>

</html>
