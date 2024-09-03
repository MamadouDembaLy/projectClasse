@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> MODIFICATION DE LA slide {{ Str::upper($slide->prenom) }}
                            {{ Str::upper($slide->nom) }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                    href="#account" role="tab" aria-controls="account" aria-selected="true"
                                    data-original-title="" title="">slide</a></li>
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
                                <form class="needs-validation user-add" novalidate=""
                                    action="{{ route('slide.update', $slide->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!--- cette methode permet -->
                                    @method('put')

                                    <div class="form-group row">
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomslide" type="hidden"
                                                name="user_id" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>NOM </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomProduit" type="text"
                                                name="nomSlide" value="{{ $slide->nom }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>MESSAGE 1</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="message1" type="text"
                                                name="message1" value="{{ $slide->message1 }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>MESSAGE 2</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="message2" type="text"
                                                name="message2" value="{{ $slide->message2 }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>Url</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="pu" type="text"
                                                name="url" value="{{ $slide->url }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <img src="{{ asset('uploads/Slide/' . $slide->image) }}"
                                                alt="" width="600" name="image" >
                                        </div>
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>NOUVELLE IMAGE ? </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>

                                    </div>


                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary">MODIFIER</button>
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
