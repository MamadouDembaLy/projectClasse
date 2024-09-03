@foreach ($slides as $slide)
<div class="banner"  >
    <div class="banner-right"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 " >
                <div class="banner-content" style="background-image:'{{asset('uploads/Slide/'.$slide->image)}}'  "  > <span>{{$slide->nom}}</span>
                    <h1>{{$slide->message1}}</h1>
                    <img src="" alt="">
                    <a class="theme-btn all-btn" href="./{{$slide->url}}">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
