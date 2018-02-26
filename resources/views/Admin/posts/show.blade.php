@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                 <a class="btn-sm btn btn-primary" href="{{route('posts.index')}}"> Atrás </a>
                 <hr>
                <div class="card">
                <div class="card-header">
                    <h4> Ver Post</h4>
                </div>
            
                <div class="card-body">
                    <p><strong>Nombre</strong>: {{ $post->name }}</p>
                    <p><strong>Creado por </strong>:  {{ $post->user_name }}</p>
                    <p><strong>Slug</strong>:  {{ $post->slug }}</p>
                    <p><strong>Extracto</strong>:  {{ $post->excerpt }}</p>
                    <p><strong>body</strong>:  {{ $post->body }}</p>
                    <p><strong>status</strong>:  {{ $post->status }}</p>
                    <p><strong>Fecha de publicación </strong>:  {{ $post->created_at }}</p>
                    @if($post->file)
                    <img src="{{ $post->file}}" class="card-img-top" alt="Card image cap">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection