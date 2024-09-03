@extends('Admin.index')
@section('container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des equipes
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">equipes</li>
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
                        <h5>equipes Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>PRENOM </th>
                                    <th>NOM </th>
                                    <th>POSTE</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($equipes as $equipe)
                                    <tr>

                                        <td>{{ $equipe->id }}</td>
                                        <td>{{ $equipe->prenom }}</td>
                                        <td>{{ $equipe->nom }}</td>
                                        <td>{{ $equipe->poste }}</td>
                                        <td> <img src="{{ asset('uploads/equipe/'.$equipe->image) }}" alt="" width="200" height="100"></td>
                                        <td>
                                            <table>
                                                @if ($equipe->etat == 0)
                                                    <tr>
                                                        <a href="{{ route('equipe.active', $equipe->id) }}"
                                                            title="Activer le equipes"><i
                                                                class="fa fa-thumbs-down fa-2x fa-regular font-danger "></i>
                                                        </a>
                                                    </tr>
                                                @else
                                                    <tr><a href="{{ route('equipe.active', $equipe->id) }}"
                                                            title="Desactiver le equipes le equipes"><i
                                                            class="fa fa-thumbs-up fa-2x fa-regular font-danger "></i></a>
                                                    </tr>
                                                @endif

                                                <tr>
                                                    <tr><a href="{{ route('equipe.edit', $equipe->id) }}"> <i
                                                        class="fa fa-edit me-2 font-success fa-2x  "></i> </a>
                                            </tr>
                                                </tr>
                                                <tr><a href="{{ route('equipe.show', $equipe->id) }}"> <i
                                                            class="fa fa-eye fa-2x "></i> </a></tr>

                                                <tr>
                                                    <form action="{{ route('equipe.destroy', $equipe->id) }}"
                                                        id="destroy{{ $equipe->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce equipes ?')) { document.getElementById('destroy{{ $equipe->id }}').submit();}">
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
