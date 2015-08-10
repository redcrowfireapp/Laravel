@extends('layouts.master')

@section('content')
{!! Form::open(['url'=>'Blog']) !!}
<div class="form-group">
	{!! Form::label('Title', 'Blog Title: ' ) !!}
	{!! Form::text('Title',null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
	{!! Form::label('Details', 'Details: ' ) !!}
	{!! Form::textarea('Details',null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
	{!! Form::label('Publishedat', 'Publishedat: ' ) !!}
	{!! Form::input('date','Publishedat',date('Y-m-d'), ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
	{!! Form::submit('Add Blog Article',['class'=>'form-control'] ) !!}
</div>
{!! Form::close() !!}

@if(count($errors))
	<ul class="alert alert-danger">
	@foreach($errors->all() as $err)
		<li>{{ $err }}</li>
	@endforeach
	</ul>
@endif

@stop
