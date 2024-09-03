@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> AJOUTER UNE OFFRES </h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                href="#account" role="tab" aria-controls="account" aria-selected="true"
                                data-original-title="" title="">OFFRES</a></li>
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
                                    action="{{ route('offre.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h4>{{__('offre') }} </h4>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>TITRE </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="text"
                                                name="titre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>PRIX </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="number"
                                                name="prix">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>PROMOTION </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="number"
                                                name="promotion">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DATE LIMIT </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomoffre" type="date"
                                                name="date_limit">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DEATIL </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <Textarea class="form-control" name="detail"></Textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>EXPERTISE </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <select name="expertise_id" class="form-select" id="">
                                                <option value="">Ajouter une expertise</option>
                                                @foreach ($expertises as $expertise )
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
