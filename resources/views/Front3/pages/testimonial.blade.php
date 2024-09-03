<div class="testimonial section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title algin-center"> <span>//  Testimonial</span>
                    <h2>What they talking about Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        @foreach ($temoignages as $temoignage)
                        <div class="testimonial-item swiper-slide">
                            <div class="testimonial-icon"> <i class="flaticon-straight-quotes"></i>
                            </div>
                            <img src="{{asset('uploads/temoignage/'.$temoignage->image)}}" alt="">
                            <div class="testimonial-content">
                                <p>{{$temoignage->detail}}</p>
                                <h3>{{$temoignage->nom}}</h3>
                                <h4>{{$temoignage->nom.'-'.$temoignage->entreprise }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination-area text-center mt-60">
                    <div class="dots"></div>
                </div>
            </div>
        </div>
    </div>
</div>
