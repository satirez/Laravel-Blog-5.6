@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <a class="btn-sm btn btn-primary" href="{{route('tags.index')}}"> Atrás </a>
            <hr>
            <div class="card">
                <div class="card-header">
                    Ver entrada
                </div>
            
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $tag->name }}</p>
                    <p><strong>Slug</strong> {{ $tag->slug }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection