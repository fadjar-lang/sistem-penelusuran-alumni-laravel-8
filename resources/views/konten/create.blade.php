@extends('layouts.master')
@section('judul')
    Tambah
@endsection
@section('content')
<form action="{{route('create')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label>tgl_lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">
    </div>
    <div class="form-group">
        <label>jenis kelamin</label>
        <input type="text" name="jk" class="form-control">
    </div>
    <div class="form-group">
        <label>alamat</label>
        <input type="text" name="alamat" class="form-control">
    </div>
    <div class="form-group">
        <label>nisn</label>
        <input type="text" name="nisn" class="form-control">
    </div>
    <div class="form-group">
        <label>no_ijazah</label>
        <input type="text" name="no_ijazah" class="form-control">
    </div>
    <div class="form-group">
        <label>jurusan</label>
        <input type="text" name="jurusan" class="form-control">
    </div>
    <div class="form-group">
        <label>no_telp</label>
        <input type="text" name="no_telp" class="form-control">
    </div>
    <div class="form-group">
        <label>pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control">
    </div>
    <div class="form-group">
        <label>tahun_masuk</label>
        <input type="text" name="tahun_masuk" class="form-control">
    </div>
    <div class="form-group">
        <label>tahun_lulus</label>
        <input type="text" name="tahun_lulus" class="form-control">
    </div>
    <button class="btn btn-primary">Save</button>
</form>
@endsection