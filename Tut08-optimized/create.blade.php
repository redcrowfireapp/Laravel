@extends('layouts.master')

@section('content')

{!! Form::open(['url'=>'Blog']) !!}
	@include('blog.form', ['Buttontext'=>'Add Blog Articles'])
{!! Form::close() !!}

@include('errors.errorlist')

@stop
