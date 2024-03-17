@extends('layouts.master')

@section('title', 'Trang chủ')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Tin Tức Mới</h1>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($data as $i)
                    <div class="col-md-3 mt-5 ms-4 card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">{{$i->tieuDe}}</h5>
                        <p class="card-text">Ngày Đăng: {{date("d-m-Y", strtotime($i->ngayDang))}}</p>
                        <a href="{{route('chi-tiet-tin-tuc', $i->id)}}" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
@endsection
