@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> evenement : {{ Str::upper($evenements->nom) }} </h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                    href="#account" role="tab" aria-controls="account" aria-selected="true"
                                    data-original-title="" title="">evenement</a></li>
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
                                    <h4>{{ Str::upper($evenements->nom)}} DETAILS</h4>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>TITRE </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="titre_event" type="text"
                                                name="titre" value="{{$evenements->titre_event}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>LIEU </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="lieu" type="text"
                                                name="lieu" value="{{$evenements->lieu}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>PRIX </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomevenement" type="number"
                                                name="prix" value="{{$evenements->prix}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DATE DEBUT </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomevenement" type="date"
                                                name="date_debut" value="{{$evenements->date_debut}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DATE FIN </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomevenement" type="date"
                                                name="date_fin" value="{{$evenements->date_fin}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DETAIL </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <Textarea class="form-control" name="detail">{{$evenements->detail}}</Textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>TYPE EVENEMENT </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <select name="type_event_id" class="form-select" id="">
                                                <option value="{{$evenements->type_event_id}}">{{$evenements->typeEvent? $evenements->typeEvent->titre:''}}</option>
                                                @foreach ($typeEvents as $typeEvent )
                                                <option value="{{$typeEvent->id}}">{{$typeEvent->titre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <img src="{{ asset('uploads/evenement/'.$evenements->image)}}" alt=""
                                            width="500">
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
