@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                    href="#account" role="tab" aria-controls="account" aria-selected="true"
                                    data-original-title="" title="">coordonne</a></li>
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
                                    action="{{ route('coordonnee.update', $coordonnes->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!--- cette methode permet de modifier -->
                                    @method('put')

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>telephone </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control" type="tel"
                                                name="telephone" value="{{$coordonnes->tel}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>email </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control" type="email"
                                                name="email" value="{{$coordonnes->email}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>adresse </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control" type="text"
                                            name="adresse" value="{{$coordonnes->adresse}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>Localisation</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <textarea name="localisation" id="" cols="30" rows="10">{{$coordonnes->localisation}}</textarea>
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
