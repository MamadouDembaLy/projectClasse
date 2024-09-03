@extends('Admin.index')
@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5> MODIFICATION DE LA CATEGORIES  {{Str::upper($categories->prenom) }} {{Str::upper($categories->nom) }}</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                href="#account" role="tab" aria-controls="account" aria-selected="true"
                                data-original-title="" title="">categories</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (session()->has('message'))
                                    <div class="alert alert-icon alert-success">{{session('message')}}</div>
                                    @endif

                                    @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-icon alert-danger">{{$error}}</div>
                                    @endforeach
                                    
                                        
                                    @endif
                                </div>
                                
                            </div>    
                            <form class="needs-validation user-add" novalidate="" action="{{route('categories.update',$categories->id)}}"  method="POST" enctype="multipart/form-data" >
                                @csrf
                                <!--- cette methode permet -->
                                @method('put')
                            
                                <h4>categories Details</h4>
                                <div class="form-group row">
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control " id="validationCustom0" type="hidden"
                                            required="" name="id" value="{{$categories->id}}" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-md-4">
                                        <label for="validationCustom0"><span>*</span>CATEGORIES</label>
                                    </div>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control " id="nomCategories" type="text"
                                            required="" name="nomCategories" value="{{$categories->nomCategories}}" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-md-4">
                                        <label for="validationCustom1"><span>*</span>PARENT</label>
                                    </div>
                                    <div class="col-xl-8 col-md-7">
                                        <select name="parent" id="parent" class="form-select " >
                                            <option value="{{$categories->id}}">{{$NomParent}}</option>
                                            
                                            @foreach ($categoriesTout as $cats)
                                                    <option value="{{$cats->id}}">{{$cats->nomCategories}}</option>
                                            @endforeach
                                            <option value="0"></option>
                                        
                                        </select>

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