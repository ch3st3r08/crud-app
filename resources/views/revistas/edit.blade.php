@extends('Layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar datos Revista</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('/revista')}}" title="Go Back">
                    <i class="fas fa-backward"></i>
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('revista.update', $revista->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $revista->nombre}}" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de revista:</strong>
                    <input type="number" name="num_revista" value="{{$revista->num_revista}}" class="form-control" placeholder="Num revista">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Edicion:</strong>
                    <input type="date" name="fecha_edicion" value="{{$revista->fecha_edicion}}" class="form-control" placeholder="Fecha de edicion">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de páginas:</strong>
                    <input type="text" name="num_paginas" value="{{$revista->num_paginas}}" class="form-control" placeholder="Numero de paginas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Editorial:</strong>
                    <input type="text" name="editorial" value="{{$revista->editorial}}" class="form-control" placeholder="Numero de paginas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </form>
@endsection