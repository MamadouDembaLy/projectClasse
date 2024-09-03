<div class="footer section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="widget contact_info">
                    <h2 class="widget-title">Get in Touch</h2>
                    @foreach ($coordonnes as $coord )
                    <div class="widget-content contact_list">
                        <!-- item -->
                        <div class="contact-widget-item d-inline-flex align-items-center">
                            <div class="contact-icon-widget"> <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="contact-content-widget">
                                <p>{{$coord->tel}}</p>
                            </div>
                        </div>
                        <!-- item  -->
                        <div class="contact-widget-item d-inline-flex align-items-center">
                            <div class="contact-icon-widget"> <i class="flaticon-email"></i>
                            </div>
                            <div class="contact-content-widget">
                                <p>{{$coord->email}}</p>
                            </div>
                        </div>
                        <!-- item  -->
                        <div class="contact-widget-item d-inline-flex align-items-center">
                            <div class="contact-icon-widget"> <i class="flaticon-pin"></i>
                            </div>
                            <div class="contact-content-widget">
                                <p>{{$coord->adresse}}</p>
                            </div>
                        </div>
                        <!-- item  -->
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 md-mb-30">
                <div class="widget footer_menu">
                    <h2 class="widget-title">Quick Links</h2>
                    <div class="footer-menu">
                        <ul>
                            @foreach ($pagesFooter as $page)
                            <li>
                                <a href="./{{$page->url }}">{{$page->nom}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-mb-30">
                <div class="widget footer_menu two">
                    <h2 class="widget-title">Our Services</h2>
                    <div class="footer-menu">
                        <ul>
                            @foreach ($expertisesFooter as $exper )
                            <li>
                                <a href="{{route('service')}}">{{$exper->titre}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget contact_info">
                    <h2 class="widget-title">Subscribe</h2>
                    <div class="subscribe-form">
                        <p>Suspendisse congue fermentum fermentum pellentesque</p>
                        <div class="form-group">
                            <form class="subscribe-from">
                                <input type="text" name="email" id="email-id" placeholder="Enter Email">
                                <button type="submit" id="subscribe"> <i class="fas fa-location-arrow"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->
<!-- Footer Bottom Area Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 sm-mb-15">
                <div class="footer-copyright">
                    <p>BETA GROUP SARL</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="footer-social">
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
