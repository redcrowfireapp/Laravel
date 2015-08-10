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
	{!! Form::submit($Buttontext,['class'=>'form-control'] ) !!} {{--$Buttontext variable here for button text--}}
</div>
