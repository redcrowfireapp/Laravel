@extends('layouts.master')

@section('content')

{!! Form::open(['url'=>'Blog']) !!}
	@include('blog.form', ['Buttontext'=>'Edit Blog Articles'])
{!! Form::close() !!}

@include('errors.errorlist')

@stop
