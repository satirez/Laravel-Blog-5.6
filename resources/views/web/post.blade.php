@extends('layouts.app')

@section('content')
<div class="container">
		
		<div class="col-md-12 col-md-offset-2">

		<h1> {{ $post->name }}</h1>
		
		<div class="card border-primary">
			<div class="card-header">
				Categoria
				<a href="{{ route('category', $post->category->slug )}}"> {{ $post->category->name}}</a>
				<a class="pull-right"> {{ $post->created_at }}  </a>
			</div>

				@if($post->file)
				<img src="{{ $post->file}}" class="card-img-top" alt="Card image cap">
				@endif
			
			<div class="card-body">
				
				
				<h5 class="card-title">{{ $post->excerpt}} </h5>

				<p class="card-text"> {!! $post -> body !!} </p>
				
					
				<p> Articulo creado por: <a href="#" >{{$post->user_name}}</a>  </p>


				<div class="card-footer">
					
				
				Etiquetas
				@foreach ($post->tags as $tag)

				<a href="{{ route('tag', $tag->slug )}}"> {{ $tag->name }}  </a> |

				@endforeach
				</div>
			</div>
		</div>
		
		<div >
			
		</div>
		
		<div id="disqus_thread"> </div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://cmsblog-com.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

	</div>

</div>

@endsection