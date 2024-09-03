@extends('Admin.index')
@section('container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des Produits
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Produits</li>
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
                        <h5>Produit Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>NOM </th>
                                    <th>CATEGORIE</th>
                                    <th>QUANTITE</th>
                                    <th>PRIX UNITAIRE</th>
                                    <th>DESCRIPTION</th>
                                    <th>IMAGE</th>
                                    <th>SEUIL</th>
                                    <th>ACTION</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($produits as $pro)
                                    <tr>
                                        <td>{{ $pro->id }}</td>
                                        <td>{{ $pro->nomProduit }}</td>
                                        <td>{{ $pro->categorie ? $pro->categorie->nomCategories : '' }}</td>
                                        <td>{{ $pro->qte }}</td>
                                        <td>{{ $pro->pu }}</td>
                                        <td>{{ $pro->Description }}</td>
                                        <td> <img src="{{ asset('uploads/Produit/'.$pro->image) }}" alt=""
                                                width="200" height="100"></td>
                                        <td>{{ $pro->seuil }}</td>
                                        <td>
                                            <table>
                                                @if ($pro->etat == 0)
                                                    <tr>
                                                        <a href="{{ route('produits.active', $pro->id) }}"
                                                            title="Activer le pro"><i
                                                                class="fa fa-thumbs-down fa-2x fa-regular font-danger "></i>
                                                        </a>
                                                    </tr>
                                                @else
                                                    <tr><a href="{{ route('produits.active', $pro->id) }}"
                                                            title="Desactiver le pro le pro"><i
                                                            class="fa fa-thumbs-up fa-2x fa-regular font-danger "></i></a>
                                                    </tr>
                                                @endif

                                                <tr>
                                                    <tr><a href="{{ route('produits.edit', $pro->id) }}"> <i
                                                        class="fa fa-edit me-2 font-success fa-2x  "></i> </a>
                                            </tr>
                                                </tr>
                                                <tr><a href="{{ route('produits.show', $pro->id) }}"> <i
                                                            class="fa fa-eye fa-2x "></i> </a></tr>
                                                <tr>
                                                    <form action="{{ route('produits.destroy', $pro->id) }}"
                                                        id="destroy{{ $pro->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?')) { document.getElementById('destroy{{ $pro->id }}').submit(); }">
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
