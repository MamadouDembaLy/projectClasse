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
                        <h2>Our Best Work</h2>
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li>{{ $pagePortfolio->nom }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Area End -->

    <!-- Work Area Start -->
    <div class="our-work section-padding">
        <div class="container">
            <div class="row">
                @foreach ($portfolios as $portfolio )
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="work-item">
                        <img src="{{asset('uploads/portfolio/'.$portfolio->image)}}" alt="">
                        <div class="work-overly">
                            <h3>{{$portfolio->catégorie}}<a href="work-details.html"></a></h3>
                            <p>{{$portfolio->titre}}</p>
                            <div class="overlay-plus">
                                <a class="img-popup" href="assets/img/work-1.jpg">
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
    <!-- Work Area End -->

    <!-- Footer Area Start -->
    @include('Front3.pages.footer')
    <!-- Footer Bottom Area End -->

    @include('Front3.pages.js')
</body>

</html>
