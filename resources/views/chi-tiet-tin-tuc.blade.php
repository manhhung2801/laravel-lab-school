@extends('layouts.master')

@section('title', 'Chi tiết tin tức')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Chi tiết tin tưc: {{$data->tieuDe}} </h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{$data->tomTat}}</p>
            <p class="card-text">Lượt xem: {{$data->xem}}</p>
            <p class="card-text">Ngày Đăng {{$data->ngayDan}}</p>
        </div>
    </div>
@endsection
