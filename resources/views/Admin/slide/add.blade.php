@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> AJOUTER UN SLIDE </h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                href="#account" role="tab" aria-controls="account" aria-selected="true"
                                data-original-title="" title="">SLIDE</a></li>
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
                                    action="{{ route('slide.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h4>{{__('SLIDE') }} </h4>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>NOM SLIDE</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomSlide" type="text"
                                                name="nomSlide">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom1"><span></span>MESSAGE 1</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="message1" type="text"
                                                name="message1">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom1"><span></span>MESSAGE 2</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="message2" type="text"
                                                name="message2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>URL</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="url" type="text"
                                                name="url">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES SLIDE</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>

                                    </div>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
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
