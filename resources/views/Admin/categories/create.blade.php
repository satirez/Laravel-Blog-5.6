@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <a class="btn-sm btn btn-primary" href="{{route('categories.index')}}"> Atrás </a>
            <hr>
            <div class="card">
                <div class="card-header">
                    <h4> Crear Categoria</h4>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'categories.store']) !!}
                        
                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection