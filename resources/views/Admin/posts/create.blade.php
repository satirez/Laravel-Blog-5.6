@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <a class="btn-sm btn btn-primary" href="{{route('posts.index')}}"> Atrás </a>
            <hr>
            <div class="card">
                <div class="card-header">
                    <h4> Crear Post</h4>
                </div>

                <div class="card-body">
                     {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                        
                        @include('admin.posts.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection