@extends('client.layout.master')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Các tin tức</h2>
    <hr>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Lặp lại phần này cho mỗi tin tức -->
        @foreach($listtin as $t)
        <div class="col">
            <div class="card h-100">
                <img src="/template/img/{{$t->urlHinh}}" class="card-img-top" alt="Tiêu đề tin">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('/chitiettin',[$t->id]) }}">
                            {{$t->tieuDe}}
                        </a>
                    </h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Đăng 3 giờ trước</small>
                </div>
                <a href="{{ url('/chitiettin',[$t->id]) }}" class="btn btn-outline-primary mt-2">Đọc thêm</a>
            </div>
        </div>
        @endforeach
        <!-- Kết thúc phần lặp lại -->
    </div>
</div>
<br>
@endsection