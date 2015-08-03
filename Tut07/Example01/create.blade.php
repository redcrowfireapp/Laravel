@extends('layouts.master')

@section('content')
{!! Form::open(['url'=>'Flower']) !!}
	<div class='form-group'>
		{!! Form::label('FlowerName', 'Flower Name:') !!}
		{!! Form::text('Fname',null,['class'=>'form-control']) !!}
	</div>
	<div class='form-group'>
		{!! Form::label('FlowerDesc', 'Description:') !!}
		{!! Form::textarea('FDescription',null,['class'=>'form-control']) !!}
	</div>
	<div class='form-group'>
		{!! Form::submit('AddFlower', ['class'=>'btn btn-primary form-control'] ) !!}
	</div>
{!! form::close() !!}

{{-- {{ dd($errors) }} --}}

@if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif


@stop
