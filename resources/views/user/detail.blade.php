@extends('layouts.master')
@section('judul')
    Tambah
@endsection
@section('content')
<form action="/update/{{$tampil->id}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$tampil->nama}}" disabled>
    </div>
    <div class="form-group">
        <label>tgl_lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="{{$tampil->tgl_lahir}}" disabled>
    </div>
    <div class="form-group">
        <label>jenis kelamin</label>
        <input type="text" name="jk" class="form-control" value="{{$tampil->jk}}" disabled>
    </div>
    <div class="form-group">
        <label>alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{$tampil->alamat}}" disabled>
    </div>
    <div class="form-group">
        <label>nisn</label>
        <input type="text" name="nisn" class="form-control" value="{{$tampil->nisn}}" disabled>
    </div>
    <div class="form-group">
        <label>no_ijazah</label>
        <input type="text" name="no_ijazah" class="form-control" value="{{$tampil->no_ijazah}}" disabled>
    </div>
    <div class="form-group">
        <label>jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="{{$tampil->jurusan}}" disabled>
    </div>
    <div class="form-group">
        <label>no_telp</label>
        <input type="text" name="no_telp" class="form-control" value="{{$tampil->no_telp}}" disabled>
    </div>
    <div class="form-group">
        <label>pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control" value="{{$tampil->pekerjaan}}" disabled>
    </div>
    <div class="form-group">
        <label>tahun_masuk</label>
        <input type="text" name="tahun_masuk" class="form-control" value="{{$tampil->tahun_masuk}}" disabled>
    </div>
    <div class="form-group">
        <label>tahun_lulus</label>
        <input type="text" name="tahun_lulus" class="form-control" value="{{$tampil->tahun_lulus}}" disabled>
    </div>
</form>
@endsection