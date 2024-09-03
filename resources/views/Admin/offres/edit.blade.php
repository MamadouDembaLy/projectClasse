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
                                    data-original-title="" title="">offre</a></li>
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
                                    action="{{ route('offre.update', $offre->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!--- cette methode permet de modifier -->
                                    @method('put')
                                    <h4>{{ Str::upper($offre->nom)}} DETAILS</h4>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>TITRE </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="text"
                                                name="titre"  value="{{$offre->titre}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>PRIX </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="number"
                                                name="prix" value="{{$offre->prix}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>PROMOTION </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="number"
                                                name="promotion" value="{{$offre->promotion}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DATE LIMIT </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="date"
                                                name="date_limit" value="{{$offre->date_limit}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DEATIL </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <Textarea class="form-control" name="detail">{{$offre->detail}}</Textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>EXPERTISE </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <select name="expertise_id" class="form-select" id="">
                                                <option value="{{$offre->expertise_id}}" >{{$offre->expertise ? $offre->expertise->titre : ''}}</option>
                                                @foreach ($expertises as $expertise)
                                                <option value="{{$expertise->id}}">{{$expertise->titre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <img src="{{asset('uploads/offre/'.$offre->img)}}" alt="" >
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary" >MODIFIER</button>
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
