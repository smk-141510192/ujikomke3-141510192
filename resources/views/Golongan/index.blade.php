@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
<h1><center>Golongan</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/Golongan/create')}}" class="btn btn-success">Tambah Data</a>
<hr>
<div class="form-group"><center>
                    <form action="{{url('Golongan')}}/?Kode_golongan=Kode_golongan">
                    <input type="text" name="Kode_golongan" placeholder="Cari"></form>
                </center></div>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Kode Golongan</th>
<th>Nama Golongan</th>
<th>Besaran Uang</th>
<th colspan="3"><center>Opsi</center></th>
</tr>
</thead>

<tbody>
	@foreach ($Golongan as $data)
	<tr>
	<td>{{ $data->id }}</td>
	<td>{{ $data->Kode_golongan }}</td>
	<td>{{ $data->Nama_golongan }}</td>
	<td>{{ $data->Besaran_uang }}</td>
	<td><center><a href="{{route('Golongan.edit', $data->id)}}" class="btn btn-warning">Update</a></center></td>  
	<td>                                            
	<center>{!! Form::open(['method' => 'DELETE', 'route'=>['Golongan.destroy', $data->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}</center>
	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
</tbody> 
</table>
@endsection                  