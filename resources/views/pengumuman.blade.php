@extends('layout.main')

@section('content')
<div class="container">
  <h1 class="text-center">PENGUMUMAN</h1>

   <table class="table table-bordered">
	<tr>
		<th>Tanggal</th>
		<th></th>
	</tr>
	@foreach($news as $n)
	<tr>
		<td>{{$n->tanggal}}</td>
		<td>{{$n->isi}}</td>
	</tr>
	@endforeach
	</table>
</div>

@endsection