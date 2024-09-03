@extends('Admin.index')
@section('container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des coordonne
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">coordonne</li>
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
                        <h5>coordonne Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TELEHONE </th>
                                    <th>EMAIL</th>
                                    <th>ADRESSE</th>
                                    <th>LOCALISATION</th>
                                    <th>ACTION</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($coordonnees as $coordonne)
                                    <tr>

                                        <td>{{ $coordonne->id }}</td>
                                        <td>{{ $coordonne->tel }}</td>
                                        <td>{{ $coordonne->email }}</td>
                                        <td>{{ $coordonne->adresse }}</td>
                                        <td>{{ $coordonne->localisation }}</td>
                                        <td>
                                            <table>
                                                @if ($coordonne->etat == 0)
                                                    <tr>
                                                        <a href="{{ route('coordonne.active', $coordonne->id) }}"
                                                            title="Activer le coordonne"><i
                                                                class="fa fa-thumbs-down fa-2x fa-regular font-danger "></i>
                                                        </a>
                                                    </tr>
                                                @else
                                                    <tr><a href="{{ route('coordonne.active', $coordonne->id) }}"
                                                            title="Desactiver le coordonne le coordonne"><i
                                                            class="fa fa-thumbs-up fa-2x fa-regular font-danger "></i></a>
                                                    </tr>
                                                @endif

                                                <tr>
                                                    <tr><a href="{{ route('coordonnee.edit', $coordonne->id) }}"> <i
                                                        class="fa fa-edit me-2 font-success fa-2x  "></i> </a>
                                            </tr>
                                                </tr>
                                                <tr><a href="{{ route('coordonnee.show', $coordonne->id) }}"> <i
                                                            class="fa fa-eye fa-2x "></i> </a></tr>

                                                <tr>
                                                    <form action="{{ route('coordonnee.destroy', $coordonne->id) }}"
                                                        id="destroy{{ $coordonne->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce coordonne ?')) { document.getElementById('destroy{{ $coordonne->id }}').submit(); }">
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
