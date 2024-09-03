@extends('Admin.index')
@section('container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des Fournisseur
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Fournisseur</li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
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
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>EMAIL</th>
                                <th>TELEPHONE</th>
                                <th>ADRESSE</th>
                                <th>NOM_ENTREPRISE</th>

                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fournisseurs as $fournisseur)
                                <tr>
                                    <!--
                                        <td>
                                            <div class="d-flex vendor-list">
                                                <img src="../assets/images/team/2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                                <span>Petey Cruiser</span>
                                            </div>
                                        </td>

                                        -->
                                    <td>{{ $fournisseur->id }}</td>
                                    <td>{{ $fournisseur->nom }}</td>
                                    <td>{{ $fournisseur->prenom }}</td>
                                    <td>{{ $fournisseur->email }}</td>
                                    <td>{{ $fournisseur->tel }}</td>
                                    <td>{{ $fournisseur->adresse }}</td>
                                    <td>{{ $fournisseur->nom_entreprise }}</td>
                                    <td>
                                        <table>

                                            <tr><a href="{{ route('fournisseur.show', $fournisseur->id) }}"> <i
                                                        class="fa fa-eye font-info fa-2x "></i> </a></tr>
                                            <tr><a href="{{ route('fournisseur.edit', $fournisseur->id) }}"> <i
                                                        class="fa fa-edit me-2 font-success fa-2x  "></i> </a>
                                            </tr>
                                            @if ($fournisseur->etat == 0)
                                                <tr><a href="{{ route('fournisseur.active', $fournisseur->id) }}"
                                                        title="Activer le fournisseur"><i
                                                            class="fa fa-thumbs-down fa-2x fa-regular font-dark "></i></a>
                                                </tr>
                                            @else
                                                <tr><a href="{{ route('fournisseur.active', $fournisseur->id) }}"
                                                        title="Desactiver le fournisseur le fournisseur"><i
                                                            class="fa fa-thumbs-up fa-2x fa-regular font-dark  "></i></a>
                                                </tr>
                                            @endif

                                            <form action="{{ route('fournisseur.destroy', $fournisseur->id) }}" id="destroy{{ $fournisseur->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?')) { document.getElementById('destroy{{ $fournisseur->id }}').submit(); }">
                                                    <i class="fa fa-trash fa-2x"></i>
                                                </a>
                                            </form>

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
