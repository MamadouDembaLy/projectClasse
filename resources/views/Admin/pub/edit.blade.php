@extends('Admin.index')
@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5> MODIFICATION DE LA PUB {{ Str::upper($pub->prenom) }}
                            {{ Str::upper($pub->nom) }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                    href="#account" role="tab" aria-controls="account" aria-selected="true"
                                    data-original-title="" title="">pub</a></li>
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
                                action="{{ route('pub.update', $pub->id) }}" method="POST"
                                enctype="multipart/form-data">
                                    @csrf
                                    <!--- cette methode permet -->
                                    @method('put')

                                    <form class="needs-validation user-add" novalidate=""
                                    action="{{ route('pub.update',$pub->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h4>{{__('pub') }} </h4>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>NOM</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="nom" type="text"
                                                name="nompub" value="{{$pub->nom}}" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>POSITION</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <textarea  id="position"  name="position" class="form-control">{{$pub->position}}</textarea>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom1"><span></span>Page</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="url" type="text"
                                                name="url" value="{{$pub->url}}" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <img src="{{asset('uploads/Pubs/'.$pub->image)}}" alt="" width="700" >
                                        </div>
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>NOUVELLE IMAGE? </label>
                                        </div>

                                        <div class="col-xl-8 col-md-7 m-3">
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>

                                    </div>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
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
