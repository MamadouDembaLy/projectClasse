@php
$regs = $pageAbout->created_at;
$toto = $pageAbout->nom;
$toto = str_replace('','-',$toto);
$tite = utf8_encode($pageAbout->nom);
$maxi = 20;
$chaines = $tite;
if(strlen($chaines) >= $maxi )
{
    $chaines = substr($chaines,0,$maxi);
    $espace = strrpos($chaines,"");
    $chaines = substr($chaines,0,$espace)."...";
}
$max = 500;
$chainef = $pageAbout->contenu;
if(strlen($chainef) >= $max)
{
    $chainef = substr($chainef,0,$max);
    $espace = strrpos($chainef," ");
    $chainef =substr($chainef,0,$espace)." .....";
}
@endphp
    <div class="about-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 md-mb-30">
                    <div class="about-left">
                        <div class="about-image1">
                            <div class="img-3 up-down-animate">
                                <img src="" alt="">
                            </div>
                            <img src="{{asset('uploads/Page/'.$pageAbout->image)}}" alt="">
                            <div class="img-2">

                                @foreach ($slides as $slide)
                                <img src="{{asset('uploads/Slide/'.$slide->image)}}" alt="">
                                @endforeach
                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="s-table">
                        <div class="s-tablec">
                            <div class="section-title"> <span></span>
                                <h2>I believe We strong
                                    Team in the world</h2>
                                <p class="p-color">{{$chainef}}</p>
                                <div class="about-btn"> <a class="theme-btn" href="./{{$pageAbout->url}}">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

