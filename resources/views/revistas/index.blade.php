@extends('Layouts.app')

@section('content')

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Num. Revista</th>
        <th>Fecha</th>
        <th>Num. Paginas</th>
        <th>Editorial</th>
        <th width="280px">Accciones</th>
    </tr>
    @foreach ($revistas as $revista)
        <tr>
            <td>{{$revista->id}}</td>
            <td>{{$revista->nombre}}</td>
            <td>{{$revista->num_revista}}</td>
            <td>{{$revista->fecha_edicion}}</td>
            <td>{{$revista->num_paginas}}</td>
            <td>{{$revista->editorial}}</td>
            <td>
                <form action="{{ URL::to('revista/' . $revista->id)}}" method="POST">
                    <a href="{{url('/revista/'.$revista->id) }}" title="show">
                        <i class="fas fa-eye text-success fa-lg"></i>
                    </a>
                    <a href="{{URL::to('revista/'.$revista->id.'/edit') }}" title="show">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete" style="border:none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{!! $revistas->links() !!}

@endsection