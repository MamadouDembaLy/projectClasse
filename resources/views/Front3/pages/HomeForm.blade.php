<div class="home-form section-padding">
    <div class="home-left-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="quote-form-main">
                    <div class="section-title quote-title"> <span>//  Free Quote</span>
                        <h2>Get your free Consultation</h2>
                    </div>
                    <div class="quote-from">
                        <form action="{{ route('contact.store')}}" method="POST" >
                            <div class="col-md-12">
                                @if (session()->has('message'))
                                    <div class="alert alert-icon alert-success">{{ session('message') }}</div>
                                @endif

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-icon alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control"  placeholder="Name" required="required" name="nom" >
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" required="required" name="email" >
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Subject" required="required" name="sujet" >
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="2" placeholder="Message" name="message" ></textarea>
                            </div>
                            <button type="submit" class="theme-btn all-btn">Send Massage</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
