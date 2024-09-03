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
            <div class="our-work section-padding">
                <div class="container">
                    <div class="row">
                        @foreach ($portfolios as $portfolio )
                        <div class="col-xl-4 col-md-6 mb-30">
                            <div class="work-item">
                                <a href="{{route('Postblog',$portfolio->id)}}"><img src="{{asset('uploads/portfolio/'.$portfolio->image)}}" alt=""></a>
                                <div class="work-overly">
                                    <h3>{{$portfolio->catégorie}}<a href="{{route('Postblog',$portfolio->id)}}"></a></h3>
                                    <p>{{$portfolio->titre}}</p>
                                    <div class="overlay-plus">
                                        <a class="img-popup" href="{{route('Postblog',$portfolio->id)}}">
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
