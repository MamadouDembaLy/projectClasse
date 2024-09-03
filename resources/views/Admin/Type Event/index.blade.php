@extends('Admin.index')
@section('container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des type event
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">type event</li>
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
                                    <th>TITRE</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($typeEvents as $typeEvent)
                                    <tr>
                                        <!--
                                        <td>
                                            <div class="d-flex vendor-list">
                                                <img src="../assets/images/team/2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                                <span>Petey Cruiser</span>
                                            </div>
                                        </td>

                                        -->
                                        <td>{{ $typeEvent->id }}</td>
                                        <td>{{ $typeEvent->titre }}</td>
                                        <td>
                                            <table>
                                                @if ($typeEvent->etat == 0)
                                                    <tr>
                                                        <a href="{{ route('type_event.active', $typeEvent->id) }}"
                                                            title="Activer le typeEvent"><i
                                                                class="fa fa-thumbs-down fa-2x fa-regular font-dark "></i>
                                                        </a>
                                                    </tr>
                                                @else
                                                    <tr><a href="{{ route('type_event.active', $typeEvent->id) }}"
                                                            title="Desactiver le typeEvent le typeEvent"><i
                                                                class="fa fa-thumbs-up fa-2x fa-regular fa-danger "></i></a>
                                                    </tr>
                                                @endif

                                                <tr><a href="{{ route('type_event.edit', $typeEvent->id) }}"> <i
                                                            class="fa fa-edit fa-2x fa-regular "></i> </a></tr>
                                                <tr><a href="{{ route('type_event.show', $typeEvent->id) }}"> <i
                                                            class="fa fa-eye fa-2x "></i> </a></tr>

                                                <tr>
                                                    <form action="{{ route('type_event.destroy', $typeEvent->id) }}"
                                                        id="destroy{{ $typeEvent->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#"
                                                            onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette type event ?')) { document.getElementById('destroy{{ $typeEvent->id }}').submit(); }">
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
