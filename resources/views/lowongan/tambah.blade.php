@extends('layouts.master')
@section('judul')
    Tambah
@endsection
@section('content')
<form action="{{route('lcr')}}" method="post">
    {{ csrf_field() }}
<div class="form-group">
    <label>Pabrik</label>
    <input type="text" name="pabrik" class="form-control">
</div>
<div class="form-group">
    <label>Kriteria</label>
    <textarea type="text" name="kriteria" class="form-control" rows="10"></textarea>
</div>
<button class="btn btn-success">Simpan</button>
</form>
@endsection