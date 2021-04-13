@extends('layouts.master')
@section('judul')
    Alumni
@endsection
@section('content')
    <br>
    <br>
    <form action="{{route('cari')}}" method="get">
    <div class="search-element">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" style="width: 250px;" name="cari">
      <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </div>
  </form>
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Nama</th>
              <th scope="col">ttl</th>
              <th scope="col">gender</th>
              <th scope="col">alamat</th>
              <th scope="col">nisn</th>
              <th scope="col">no_ijazah</th>
              <th scope="col">jurusan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
              <?php $no=1; ?>
              @foreach ($data as $dt)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$dt->nama}}</td>
              <td>{{$dt->tgl_lahir}}</td>
              <td>{{$dt->jk}}</td>
              <td>{{$dt->alamat}}</td>
              <td>{{$dt->nisn}}</td>
              <td>{{$dt->no_ijazah}}</td>
              <td>{{$dt->jurusan}}</td>
              <td> <br> <a href="/detail/{{$dt->id}}" class="btn btn-success">detail</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <style>
          .w-5{
            display: none;
          }
        </style>
      </div>
@endsection