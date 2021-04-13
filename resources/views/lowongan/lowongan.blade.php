@extends('layouts.master')
@section('judul')
    Lowongan
@endsection
@section('content')
<a href="/lowongan/tambah" class="btn btn-success"><i class="fa fa-plus"></i></a>
<br>
<br>
@foreach ($data as $item)
<div class="card">
    <div class="card-header">
    <h4>{{$item->pabrik}}</h4>
    </div>
    <div class="card-body">
    {{$item->kriteria}}
    </div>
    <div class="card-footer">
    <a href="/ledit/{{$item->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
    <a href="/lhapus/{{$item->id}}" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
    </div>
</div>
    
@endforeach

  
@endsection