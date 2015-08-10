@extends('layouts.master')

@section('content')

{!! Form::model($blog,['method'=>'patch','url'=>['Blog/'.$blog->id ]]) !!}
	@include('blog.form', ['Buttontext'=>'Edit Blog Articles'])
{!! Form::close() !!}

@include('errors.errorlist')

@stop
