@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> AJOUTER UN PRODUITS </h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                    href="#account" role="tab" aria-controls="account" aria-selected="true"
                                    data-original-title="" title="">PRODUITS</a></li>
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
                                    action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h4>{{__('PRODUCT') }} </h4>

                                    <div class="form-group row">
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomProduits" type="hidden"
                                                required="" name="user_id" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>NOM PRODUITS</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nomProduit" type="text"
                                                required="" name="nomProduit">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom1"><span></span>CATEGORIES</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <select name="idCat" id="idCat" class="form-select " >
                                                <option value="0"></option>
                                                @foreach ($categories as $cats )
                                                <option value="{{$cats->id}}"> {{$cats->nomCategories}} </option>
                                                @endforeach ()
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>QUANTITÉ PRODUITS</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="quantite" type="number"
                                                required="" name="quantite">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>SEUIL PRODUITS</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="quantite" type="number"
                                                required="" name="seuil">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>PRIX UNITAIRE PRODUITS</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="pu" type="number"
                                                required="" name="pu">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DESCRIPTION PRODUITS</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <textarea name="description" id="description" cols="10" rows="5" class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES PRODUITS</label>
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
