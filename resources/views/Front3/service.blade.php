<!DOCTYPE html>
<html lang="en">
@include('Front3.pages.head')
<body>

    @include('Front3.pages.preloader')
	<!-- Header Area Start -->
	@include('Front3.pages.header')
	<!-- Header Area End -->

	<!-- Page Header Area Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header-content">
						<h2>Services</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>{{$pageService->nom}}</li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Area End -->
	<!-- Services Area Start -->
	<div class="services section-padding">
		<div class="container">
			<div class="row">
                @foreach ($expertises as $expertise)
				<div class="col-xl-4 col-md-6 mb-30">
					<div class="service-item"> <img src="{{asset('uploads/expertise/'.$expertise->image)}}" alt="">
						<h3>{{$expertise->titre}}</h3>
						<p>{{$expertise->detail}}</p>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- Services Area End -->

	<!-- Footer Area Start -->
    @include('Front3.pages.footer')
	<!-- Footer Bottom Area End -->

	@include('Front3.pages.js')
</body>

</html>
