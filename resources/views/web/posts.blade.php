@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<div class="col-md-12 col-md-offset-2">
		<h1 align="center"> Lista de Articulos </h1>
		
		<div class="row">
			
	
		@foreach($posts as $post)
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h4 card-title > {{$post->name}}  </h4>	 

					<p pull-right style="font-size: 2"> {{$post->created_at}}  </p>
				</div>
				@if($post->file)
				<img src="{{ $post->file}}" class="card-img-top" width="523" height="175" >
				@endif

				<div class="card-body">

					<p class="card-text"> {{ $post->excerpt}} </p>

				</div>

				<div class="card-footer">

					Creador por: {{ $post->user_name }}
					<a href="{{ route('post', $post->slug)}}" class="btn-sm btn btn-primary pull-right">Leer más</a>

				</div>
			</div>
			<br>
		</div>

		@endforeach

			</div>
		{{ $posts->render()}}

	</div>	
</div>

@endsection