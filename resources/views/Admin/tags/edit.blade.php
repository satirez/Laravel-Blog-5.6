@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <a class="btn-sm btn btn-primary" href="{{route('tags.index')}}"> Atrás </a>
            <hr>
            <div class="card">
                <div class="card-header">
                    Editar etiqueta
                </div>

                <div class="card-body">
                    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.tags.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection