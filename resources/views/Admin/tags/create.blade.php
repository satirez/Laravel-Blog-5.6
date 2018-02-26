@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a class="btn-sm btn btn-primary" href="{{route('tags.index')}}"> Atrás </a>
            <hr>
            <div class="card">
                <div class="card-header">
                    Crear etiqueta
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'tags.store']) !!}
                        
                        @include('admin.tags.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection