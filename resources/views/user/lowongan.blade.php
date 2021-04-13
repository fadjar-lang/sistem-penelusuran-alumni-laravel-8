@extends('layouts.master')
@section('judul')
    Lowongan
@endsection
@section('content')
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
</div>
    
@endforeach

  
@endsection