<div class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title algin-center"> <span>//  Services</span>
                    <h2>We Provide reliable
                        Services</h2>
                </div>
            </div>
        </div>
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
        <div class="about-btn"> <a class="theme-btn" href="{{route('service')}}">Voir Plus</a>
        </div>
    </div>
</div>
