@extends('layouts.layout')

@section('content')

	<div class="row">
		<div class="col-sm-12 blog-main">
			<div class="blog-post">
				<p class="blog-post-meta" style="width: 90px; float: right; margin-top: 8px;">{{ 'Created at '.$post->created_at }}</p>
		        <h2 class="blog-post-title">{{$post->title}}</h2>
				
				@if($post->img)
					<img src="{{ asset('uploads/'.$post->img) }}" alt="">
				@endif

				<img src="{{ asset('uploads/default.png') }}" alt="">

		        <p>{!!$post->body!!}</p>
		    </div>
		</div>
    </div>

@endsection
