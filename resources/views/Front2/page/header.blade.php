<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <form action="#">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container-fill d-flex justify-content-between align-items-center">


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets2/img/logo-light.png') }}" class="logo logo-display" alt="Logo">
                    <img src="{{ asset('assets2/img/logo.png') }}" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="assets/img/logo.png" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    @foreach ($pages as $page)
                        <li class="dropdown">
                            <a href="./{{ $page->url }}"data-toggle="dropdown">{{ $page->nom }}</a>
                        </li>
                    @endforeach

                    <!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="project.html" class="dropdown-toggle" data-toggle="dropdown" >Projects</a>
                        <ul class="dropdown-menu">
                            <li><a href="project.html">Project style one</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html">Services Version One</a></li>
                            <li><a href="services-2.html">Services Version Two</a></li>
                            <li><a href="services-details.html">Services Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                            <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                            <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html">contact</a></li>
                    --->
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav flex">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->


                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="icon_close"></i></a>
                    <div class="widget">
                        <div class="logo">
                            <img src="assets/img/logo-light.png" alt="Logo">
                        </div>
                    </div>
                    <div class="widget">
                        <p>
                            Digital marketing is the component of marketing that uses the Internet and online based
                            digital technologies such as desktop computers, mobile phones and other digital media and
                            platforms to promote products and services.
                        </p>
                    </div>
                    <div class="widget address">
                        <div>
                            <ul>
                                <li>
                                    <div class="content">
                                        <p>Address</p>
                                        <strong>California, TX 70240</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <p>Email</p>
                                        <strong>support@validtheme.com</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <p>Contact</p>
                                        <strong>+44-20-7328-4499</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget newsletter">
                        <h4 class="title">Get Subscribed!</h4>
                        <form action="#">
                            <div class="input-group stylish-input-group">
                                <input type="email" placeholder="Enter your e-mail" class="form-control"
                                    name="email">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="arrow_right"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="widget social">
                        <ul class="link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>

                </div>
                <!-- End Side Menu -->

            </div>
            <!-- Main Nav -->

        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
    </nav>
    <!-- End Navigation -->
</header>
