@extends('layouts.master')


@section('content')
	@if(count($articles))
		@foreach($articles as $article)
		<ul><a href="article/{{ $article->id }}">{{ $article->ArtName }}</a>
			<li>{{ $article->ArtDet }}</li>
		</ul>
		@endforeach	
	@endif
@stop
