@extends('layouts.master')


@section('content')
	@if(count($articles))
		@foreach($articles as $article)

		{{-- Miltiple way to give URL under href --}}

{{--	<ul><a href="article/{{ $article->id }}">{{ $article->ArtName }}</a>	--}}
{{--	<ul><a href="{{ action('ArticleController@show',[$article->id]) }}">{{ $article->ArtName }}</a>	--}}
{{--	<ul><a href="{{ url('article',$article->id) }}">{{ $article->ArtName }}</a>	--}}

			<li>{{ $article->ArtDet }}</li>
		</ul>
		@endforeach	
	@endif
@stop
