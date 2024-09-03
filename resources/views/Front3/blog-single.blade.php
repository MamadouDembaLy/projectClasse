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
						<h2>Blog Single</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Area End -->
	<!-- Blog single Area Start -->
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 md-mb-30">
					<div class="blog-main-lists">
						<div class="blog-item mb-30">
							<div class="blog-img">
								<img src="{{asset('uploads/blog/'.$blog->image)}}" alt="">
							</div>
							<div class="blog-single blog-content pl-0 pr-10">
								<ul>
									<li><i class="flaticon-check"></i></li>
									<li><i class="flaticon-check"></i> </li>
								</ul>
								<h2><a href="#">{{$blog->titre}}</a></h2>
								<p class="mb-10">{{$blog->detail}}</p>
							</div>
						</div>
                        <!--
						<div class="blog-content blog-main-content mb-40">
							<h4>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            <i class="flaticon-straight-quotes"></i>
                            </h4>
						</div>
						<div class="blog-item">
							<div class="blog-img">
								<img src="assets/img/Rectangle-91.png" alt="">
								<a id="play-video" class="video-icon video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA">	<span></span>
								</a>
							</div>
						</div>
						<div class="blog-single blog-content pl-0 pr-10">
							<h2><a href="#">Essential for the Construction Industry</a></h2>
							<p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
							<div class="blog-tags">
								<ul>
									<li>
										<h5>Releted Tags :</h5>
									</li>
									<li><a href="#">Construction</a>
									</li>
									<li><a href="#">Building</a>
									</li>
								</ul>
							</div>
						</div>
                    -->
					</div>
					<div class="comment-count widget-title pt-60">
						<h2>03 Comments</h2>
					</div>
					<div class="comment-temp">
						<ul>
							<li>
								<div class="comment-item mb-30">
									<div class="comt-user">
										<img src="assets/img/comment-1.png" alt="">
									</div>
									<div class="comt-detail">
										<div class="comtuser-name">
											<h3>Mithila Islam</h3>
											<p>2 days Ago</p>	<a class="comt-reply" href="#"><i class="fas fa-reply"></i>Reply</a>
										</div>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
									</div>
								</div>
							</li>
							<li class="comt-sub">
								<div class="comment-item mb-30">
									<div class="comt-user">
										<img src="assets/img/comment-2.png" alt="">
									</div>
									<div class="comt-detail">
										<div class="comtuser-name">
											<h3>Mithila Islam</h3>
											<p>2 days Ago</p>	<a class="comt-reply" href="#"><i class="fas fa-reply"></i>Reply</a>
										</div>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
									</div>
								</div>
							</li>
							<li>
								<div class="comment-item mb-60">
									<div class="comt-user">
										<img src="assets/img/comment-3.png" alt="">
									</div>
									<div class="comt-detail">
										<div class="comtuser-name">
											<h3>Mithila Islam</h3>
											<p>2 days Ago</p>	<a class="comt-reply" href="#"><i class="fas fa-reply"></i>Reply</a>
										</div>
										<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="comment-form-title widget-title">
						<h2>Add Comment</h2>
					</div>
					<div class="comment-form">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" name="name" placeholder="Name" required="required">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="email" name="email" placeholder="Email" required="required">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<textarea name="message" rows="6" placeholder="Your Comment"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<button type="submit" class="theme-btn">Post Comment</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="right-sidebar">
						<div class="widget-search">
							<form class="widget-search-box" action="#">
								<input class="form-control" placeholder="Search..." type="text">
								<button type="submit" class="search-button"><i class="flaticon-loupe"></i>
								</button>
							</form>
						</div>
                        <!--
						<div class="widget-category widget-list">
							<div class="widget-title">
								<h2>Category</h2>
							</div>
							<div class="category-item">
								<ul>
									<li><a href="#">Interior Design <i class="flaticon-next"></i></a>
									</li>
									<li><a href="#">Site Construction <i class="flaticon-next"></i></a>
									</li>
									<li><a href="#">Infrastructure <i class="flaticon-next"></i></a>
									</li>
									<li><a href="#">Infrastructure <i class="flaticon-next"></i></a>
									</li>
									<li><a href="#">Automation <i class="flaticon-next"></i></a>
									</li>
								</ul>
							</div>
						</div>
                        --->
						<div class="widget-post widget-list">
							<div class="widget-title">
								<h2>Recent Post</h2>
							</div>
							<div class="post-item">
								<ul>
                                    @foreach ($blogs as $blg)
                                    @php
                                    $regs = $blg->created_at;
                                    $toto = $blg->titre;
                                    $toto = str_replace('','-',$toto);
                                    $tite = utf8_encode($blg->titre);
                                    $maxi = 60;
                                    $chaines = $tite;
                                    if(strlen($chaines) >= $maxi )
                                    {
                                        $chaines = substr($chaines,0,$maxi);
                                        $espace = strrpos($chaines,"");
                                        $chaines = substr($chaines,0,$espace)."...";
                                    }

                                @endphp
									<li>
										<img src="{{asset('uploads/blog/'.$blg->image)}}" alt="">
										<h4><a href="{{route('Postblog',$blg->id)}}">{{$chaines}}</a></h4>
										<i class="flaticon-check"></i><span>{{date("d/M/Y",strtotime($blg->created_at))}}</span>
									</li>
                                    @endforeach
								</ul>
							</div>
						</div>
                        <!--
						<div class="widget-tags widget-list">
							<div class="widget-title">
								<h2>Tags</h2>
							</div>
							<div class="blog-tags">
								<ul>
									<li><a href="#">Construction</a>
									</li>
									<li><a href="#">Building</a>
									</li>
									<li><a href="#">Design</a>
									</li>
									<li><a href="#">Interior</a>
									</li>
									<li><a href="#">Architecture</a>
									</li>
									<li><a href="#">Automation</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-gallery widget-list">
						<div class="widget-title">
							<h2>Gallery</h2>
						</div>
						<div class="gallery">
							<ul class="d-flex">
								<li>
									<a class="img-popup" href="assets/img/Gallery-1.png">
										<img src="assets/img/Gallery-1.png" alt="">
									</a>
								</li>
								<li>
									<a class="img-popup" href="assets/img/Gallery-2.png">
										<img src="assets/img/Gallery-2.png" alt="">
									</a>
								</li>
								<li>
									<a class="img-popup" href="assets/img/Gallery-3.png">
										<img src="assets/img/Gallery-3.png" alt="">
									</a>
								</li>
								<li>
									<a class="img-popup" href="assets/img/Gallery-4.png">
										<img src="assets/img/Gallery-4.png" alt="">
									</a>
								</li>
							</ul>
						</div>
					</div>
                -->
				</div>
			</div>
		</div>
	</div>
	<!-- Blog List Area End -->

	<!-- Footer Area Start -->
	@include('Front3.pages.footer')
	<!-- Footer Bottom Area End -->

	@include('Front3.pages.js')
</body>

</html>
