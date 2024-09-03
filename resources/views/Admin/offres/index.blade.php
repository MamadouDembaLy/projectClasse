@extends('Admin.index')
@section('container')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des offres
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">offres</li>
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
                        <h5>offres Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TITRE </th>
                                    <th>PRIX</th>
                                    <th>PROMOTION</th>
                                    <th>DATE LIMIT</th>
                                    <th>DETAIL</th>
                                    <th>EXPERTISE</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offres as $offre)
                                    <tr>
                                        <td>{{ $offre->id }}</td>
                                        <td>{{ $offre->titre }}</td>
                                        <td>{{ $offre->prix }}</td>
                                        <td>{{ $offre->promotion }}</td>
                                        <td>{{ $offre->date_limit }}</td>
                                        <td>{{ $offre->detail }}</td>
                                        <td>{{ $offre->expertise ? $offre->expertise->titre : '' }}</td>
                                        <td>{{ $offre->image }}</td>
                                        <td> <img src="{{ asset('uploads/offre/' . $offre->image) }}" alt=""
                                                width="200" height="100"></td>
                                        <td>
                                            <table>
                                                <!--
                                                @if ($offre->etat == 0)
                                                    <tr>
                                                        <a href="{{ route('offre.active', $offre->id) }}"
                                                            title="Activer le offre"><i
                                                                class="fa fa-thumbs-down fa-2x fa-regular font-danger "></i>
                                                        </a>
                                                    </tr>
                                                @else
                                                    <tr><a href="{{ route('offre.active', $offre->id) }}"
                                                            title="Desactiver le offre le offre"><i
                                                                class="fa fa-thumbs-up fa-2x fa-regular font-danger "></i></a>
                                                    </tr>
                                                @endif
                                                -->
                                                <tr>
                                                <tr><a href="{{ route('offre.edit', $offre->id) }}"> <i
                                                            class="fa fa-edit me-2 font-success fa-2x  "></i> </a>
                                                </tr>
                                    </tr>
                                    <tr><a href="{{ route('offre.show', $offre->id) }}"> <i class="fa fa-eye fa-2x "></i>
                                        </a></tr>

                                    <tr>
                                        <form action="{{ route('offre.destroy', $offre->id) }}"
                                            id="destroy{{ $offre->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#"
                                                onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce offre ?')) { document.getElementById('destroy{{ $offre->id }}').submit(); }">
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
