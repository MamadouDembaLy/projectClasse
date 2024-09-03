@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> slide : {{ Str::upper($slide->nom) }} </h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                    href="#account" role="tab" aria-controls="account" aria-selected="true"
                                    data-original-title="" title="">SLIDER</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="account" role="tabpanel"
                                aria-labelledby="account-tab">
                                <div class="row">
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

                                </div>
                                <form class="needs-validation user-add" enctype="multipart/form-data">
                                    @csrf
                                    <!--- cette methode permet -->
                                    @method('put')

                                    <h4>{{ Str::upper($slide->nom) }} DETAILS</h4>


                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>NOM</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nom" type="text" required=""
                                                name="nom" value="{{ $slide->nom }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>MESSAGE 1 </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="quantite" type="text" required=""
                                                name="quantite" value="{{ $slide->message1 }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>MESSAGE2</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " type="text" required=""
                                                value="{{ $slide->message2 }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>URL</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="pu" type="text" required=""
                                                value="{{ $slide->url }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <img src="{{ asset('uploads/slide/' . $slide->image) }}" alt=""
                                                width="300">
                                        </div>

                                    </div>


                                </form>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
