@extends('Admin.index')
@section('container')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Liste Des contact
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">contact</li>
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
                        <h5>contact Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM </th>
                                    <th>EMAIL</th>
                                    <th>SUJET</th>
                                    <th>MESSAGE</th>
                                    <th>ACTION</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->nom }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->sujet }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <a href="{{ route('contact.show', $contact->id) }}"> <i
                                                        class="fa fa-eye fa-2x "></i> </a>
                                                </tr>
                                                <tr>
                                                    <form action="{{ route('contact.destroy', $contact->id) }}"
                                                        id="destroy{{ $contact->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#"
                                                            onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer ce contact ?')) { document.getElementById('destroy{{ $contact->id }}').submit(); }">
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
