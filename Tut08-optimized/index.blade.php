@extends('layouts.master')

@section('content')
	@if(count($blog))
		@foreach($blog as $b)
			<ul><a href="{{ url('Blog', $b->id) }}"> {{ $b->Title }} </a>
				<li>{{ $b->Details }}</li>
			</ul>
		@endforeach
	@endif
@stop
