@extends('layouts.master')

@section('header')
	<h3>I am Header</h3>
@stop

@section('content')

	@if(count($topics))
		@foreach($topics as $topic)
		<ul><h1>{{$topic->topicName}}</h1>
			<li>{{$topic->topicDetails}}</li>
		</ul>
		@endforeach
	@endif

@stop

@section('footer')
	<h3>I am footer</h3>
@stop
