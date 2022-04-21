@extends('master')
@section('content')
	
	<table>
		
		<tr>
			<td>name<td>
			<td>mail<td>
			<td>pass<td>
		</tr>
		@foreach($product as $row)
		<tr>
			<td>
				{{$row->name}}
			</td>
			<td>
				{{$row->mail}}
			</td>
			<td>
				{{$row->pass}}
			</td>
		</tr>
		@endforeach
</table>

@endsection