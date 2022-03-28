@extends('Layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Agregar Nueva Revista</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{URL::to('revista/')}}" title="Go Back">
                    <i class="fas fa-backward"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Uppps</strong> Hubo algunos problemas con la entrada. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('revista.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de Revista:</strong>
                    <input type="text" name="num_revista" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de edicion:</strong>
                    <input type="date" name="fecha_edicion" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de Páginas:</strong>
                    <input type="text" name="num_paginas" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Editorial:</strong>
                    <input type="text" name="editorial" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection