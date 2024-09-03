@extends('Admin.index')
@section('container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des Categories
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Categories</li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('message'))
                            <div class="alert alert-icon alert-success bg-primary">{{ session('message') }}</div>
                        @endif

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-icon alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5>Vendor Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>NOM CATEGORIES</th>
                                    <th>PARENT</th>
                                    <th>TYPE</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $cats)
                                    <tr>
                                        <!--
                                    <td>
                                        <div class="d-flex vendor-list">
                                            <img src="../assets/images/team/2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                            <span>Petey Cruiser</span>
                                        </div>
                                    </td>

                                    -->
                                        <td>{{ $cats->id }}</td>
                                        <td>{{ $cats->nomCategories }}</td>
                                        <td>{{ $cats->parent }}</td>
                                        <td>{{ $cats->type }}</td>
                                        <td>{{ $cats->tel }}</td>

                                        <td>
                                            <table>
                                                @if ($cats->etat == 0)
                                                    <tr>
                                                        <a href="{{ route('categories.active', $cats->id) }}"
                                                            title="Activer le cats"><i
                                                                class="fa fa-thumbs-down fa-2x fa-regular font-dark "></i>
                                                        </a>
                                                        </tr>
                                                @else
                                                    <tr><a href="{{ route('categories.active', $cats->id) }}"
                                                            title="Desactiver le cats le cats"><i
                                                                class="fa fa-thumbs-up fa-2x fa-regular fa-danger "></i></a>
                                                    </tr>
                                                @endif

                                                <tr><a href="{{ route('categories.edit', $cats->id) }}"> <i
                                                            class="fa fa-edit fa-2x fa-regular "></i> </a></tr>
                                                <tr><a href="{{ route('categories.show', $cats->id) }}"> <i
                                                            class="fa fa-eye fa-2x "></i> </a></tr>

                                                <tr>
                                                    <form action="{{ route('categories.destroy', $cats->id) }}"
                                                        id="destroy{{ $cats->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette categories ?')) { document.getElementById('destroy{{ $cats->id }}').submit(); }">
                                                            <i class="fa fa-trash fa-2x"></i>
                                                        </a>
                                                    </form>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
    @endsection
