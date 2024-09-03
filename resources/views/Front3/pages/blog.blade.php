<div class="blog section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title algin-center"> <span>// New & Blog</span>
                    <h2>Everyday update</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blg )
                    @php
                        $regs = $blg->created_at;
                        $toto = $blg->titre;
                        $toto = str_replace('','-',$toto);
                        $tite = utf8_encode($blg->titre);
                        $maxi = 20;
                        $chaines = $tite;
                        if(strlen($chaines) >= $maxi )
                        {
                            $chaines = substr($chaines,0,$maxi);
                            $espace = strrpos($chaines,"");
                            $chaines = substr($chaines,0,$espace)."...";
                        }
                        $max = 120;
                        $chainef = $blg->detail;
                        if(strlen($chainef) >= $max)
                        {
                            $chainef = substr($chainef,0,$max);
                            $espace = strrpos($chainef," ");
                            $chainef =substr($chainef,0,$espace)."...";
                        }
                    @endphp
            <div class="col-lg-4 md-mb-30">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('uploads/blog/'.$blg->image)}}" alt="">
                    </div>
                    <div class="blog-content">
                        <ul>
                            <li><i class="flaticon-check"></i>{{date("d/M/Y",strtotime($blg->created_at))}}</li>
                            <li><i class="flaticon-chat"></i> Comments 3</li>
                        </ul>
                        <h3><a href="{{route('Postblog',$blg->id)}}">{{$chainef}}</p> <a href="{{route('Postblog',$blg->id)}}">Load More <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
