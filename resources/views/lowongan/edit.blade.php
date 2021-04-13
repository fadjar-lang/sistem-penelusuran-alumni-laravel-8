@extends('layouts.master')
@section('judul')
    Edit
@endsection
@section('content')
<form action="/lupdate/{{$data->id}}" method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label>Pabrik</label>
    <input type="text" name="pabrik" class="form-control" value="{{$data->pabrik}}">
</div>
<div class="form-group">
    <label>Kriteria</label>
    <textarea type="text" name="kriteria" class="form-control" value="{{$data->kriteria}}"></textarea>
</div>
<button class="btn btn-success">Simpan</button>
</form>
@endsection