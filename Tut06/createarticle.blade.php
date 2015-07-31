{{--
	|--------------------------------------------------------------------------
	| To create normal form control
	|--------------------------------------------------------------------------
	|
	| {!! Form::open() !!}
	| 	{!! Form::label('name', 'Name:') !!}
	| 	{!! Form::text('name') !!}
	| {!! Form::close() !!}
	|
--}}
	
{{--
	|--------------------------------------------------------------------------
	| To create Bootstrap form control and Multiple way to put url under action
	|--------------------------------------------------------------------------
	|
	| {!! Form::open(['url'=>'article']) !!}
	|
	| (or)
	|
	| {!! Form::open(['action'=>'ArticleController@store']) !!}
	|
	|	<div class="form-group">
	| 		{!! Form::label('name', 'Name:') !!}
	| 		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	|	</div>
	| {!! Form::close() !!}
	|
--}}

@extends('layouts.master')

@section('content')

	{!! Form::open(['url'=>'article']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Article Name:') !!}
			{!! Form::text('ArtName', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('name', 'Article Details:') !!}
			{!! Form::textarea('ArtDet', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}

@stop
