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
                                    data-original-title="" title="">blog</a></li>
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
                                    action="{{ route('portfolio.update', $portfolio->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!--- cette methode permet de modifier -->
                                    @method('put')

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>TITRE </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="titre" type="text" name="titre" value="{{$portfolio->titre}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>CATEGORIE </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="categorie" type="text" name="categorie" value="{{$portfolio->catégorie}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>TAGS </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="tags" type="text" name="tags" value="{{$portfolio->tags}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>CLIENT </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input class="form-control " id="client" type="text" name="client" value="{{$portfolio->client}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>DETAIL </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <Textarea class="form-control" name="detail">{{$portfolio->detail}}</Textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>IMAGES </label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <img src="{{asset('uploads/portfolio/'.$portfolio->image)}}" alt="">
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-4">
                                            <label for="validationCustom0"><span></span>date</label>
                                        </div>
                                        <div class="col-xl-8 col-md-7">
                                            <input type="date" name="date" id="date" class="form-control" value="{{$portfolio->date}}">
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
