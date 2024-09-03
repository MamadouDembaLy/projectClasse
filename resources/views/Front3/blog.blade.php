<!DOCTYPE html>
<html lang="en">
@include('Front3.pages.head')
<body>
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
						<h2>Blog</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>{{$blog->nom}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Area End -->

	<!-- Blog Grid Area Start -->
	<div class="blog section-padding">
		<div class="container">
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
                        $max = 150;
                        $chainef = $blg->detail;
                        if(strlen($chainef) >= $max)
                        {
                            $chainef = substr($chainef,0,$max);
                            $espace = strrpos($chainef," ");
                            $chainef =substr($chainef,0,$espace)."...";
                        }
                    @endphp
				<div class="col-lg-4 md-mb-30 my-5">
					<div class="blog-item">
						<div class="blog-img">
							<img src="{{asset('uploads/blog/'.$blg->image)}}" alt="">
						</div>
						<div class="blog-content">
							<ul>
								<li><i class="flaticon-check"></i>{{date("d/M/Y",strtotime($blg->created_at))}}</li>
								<li><i class="flaticon-chat"></i> Comments 3</li>
							</ul>
                            <h3>
                                <a href="blog-single.html">{{$chaines}}</a>
                            </h3>
							<p></p>
                            <a href="{{route('Postblog',$blg->id)}}">Lire+ <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
                @endforeach
			</div>
			<div class="row my-5">
				<div class="col-lg-12">
					<div class="blog-pagination text-center mt-40">
						<ul>
							<li><a href="#"><i class="fas fa-chevron-left"></i></a>
							</li>
							<li><a class="active" href="#">01</a>
							</li>
							<li><a href="#">02</a>
							</li>
							<li><a href="#">03</a>
							</li>
							<li><a href="#">04</a>
							</li>
							<li><a href="#"><i class="fas fa-chevron-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Grid Area End -->

	<!-- Footer Area Start -->
	@include('Front3.pages.footer')
	<!-- Footer Bottom Area End -->

	@include('Front3.pages.js')
</body>

</html>
