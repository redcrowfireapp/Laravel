@extends('layouts.master')

@section('content')
<ul>{{ $blog->Title }}
	<li>{{ $blog->Details }}</li>
</ul>
@stop
