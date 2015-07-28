@extends('layouts.master')

@section('header')
	<h3>I am Header</h3>
@stop

@section('content')
	<h3>I am body</h3>

@if(count($names))
	<ul>
	@foreach($names as $name)
		<!-- <li><?= //$name?></li> --> <!-- Unescaped Variable "$name" means you can pass html tag with this $name --> 
		<!-- <li>{!! $name !!}</li> --> <!-- Unescaped Variable "$name" means you can pass html tag with this $name --> 
		<li>{{$name}}</li> <!-- Escaped Variable "$name" means you can not pass html tag with this $name --> 
	@endforeach
	</ul>
@endif

@stop

@section('footer')
	<h3>I am footer</h3>
@stop
