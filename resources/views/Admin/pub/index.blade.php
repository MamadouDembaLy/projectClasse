@extends('Admin.index')
@section('container')
    <div class="pub-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="pub-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pub-header-left">
                            <h3>Liste Des pubs
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Pub</li>
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
                        <h5>PUB Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>NOM </th>
                                    <th>POSITION</th>
                                    <th>PAGE</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($pubs as $pub)
                                    <tr>

                                        <td>{{ $pub->id }}</td>
                                        <td>{{ $pub->nom }}</td>
                                        <td>{{ $pub->position }}</td>
                                        <td>{{ $pub->page ? $pub->page->nom :'' }}</td>
                                        <td> <img src="{{ asset('uploads/Pubs/'.$pub->image) }}" alt="{{$pub->nom}}" width="200" height="100"></td>
                                        <td>
                                            <table>
                                                @if ($pub->etat == 0)
                                                    <tr>
                                                        <a href="{{ route('pub.active', $pub->id) }}"
                                                            title="Activer le pub"><i
                                                                class="fa fa-thumbs-down fa-2x fa-regular font-danger "></i>
                                                        </a>
                                                    </tr>
                                                @else
                                                    <tr><a href="{{ route('pub.active', $pub->id) }}"
                                                            title="Desactiver le pub le pub"><i
                                                            class="fa fa-thumbs-up fa-2x fa-regular font-danger "></i></a>
                                                    </tr>
                                                @endif

                                                <tr>
                                                    <tr><a href="{{ route('pub.edit', $pub->id) }}"> <i
                                                        class="fa fa-edit me-2 font-success fa-2x  "></i> </a>
                                            </tr>
                                                </tr>
                                                <tr><a href="{{ route('pub.show', $pub->id) }}"> <i
                                                            class="fa fa-eye fa-2x "></i> </a></tr>

                                                <tr>
                                                    <form action="{{ route('pub.destroy', $pub->id) }}"
                                                        id="destroy{{ $pub->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#" onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette pub ?')) { document.getElementById('destroy{{ $pub->id }}').submit(); }">
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
