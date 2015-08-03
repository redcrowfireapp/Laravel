@foreach($data as $d)
<UL><H1>{{ $d->Fname }}</H1>
	<LI>{{ $d->FDescription }}</LI>
</UL>
@endforeach

<a href="{{url('Flower/create')}}">Fill Again</a>>

