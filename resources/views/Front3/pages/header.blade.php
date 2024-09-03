@foreach ($coordonnes as $coord)
<div class="header">
    <!-- top bar start -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 sm-mb-5">
                    <div class="top-left">
                        <ul>
                            <li><a href="#"><i class="flaticon-telephone"></i>{{$coord->tel}}</a>
                            </li>
                            <li><a href="#"><i class="flaticon-envelope"></i>{{$coord->email}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="top-right">
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
        </div>
    </div>
    <!-- menu start -->
    <div class="header-menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                        <a href="index.html">
                            @foreach ($logos as $logo)
                            <img src="{{asset('uploads/logo/'.$logo->image)}}" alt="">
                            @endforeach
                        </a>
                    </div>
                    <div class="responsive-menu"></div>
                </div>
                <div class="col-xl-10 col-lg-10">
                    <div class="main-menu">
                        <ul id="mobilemenu">
                            @foreach ($pages as $page)
                            <li>
                                <a href="./{{$page->url }}">{{$page->nom}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
