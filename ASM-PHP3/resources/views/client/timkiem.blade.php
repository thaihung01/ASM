@extends('client.layout.master')

@section('content')
    <div class="container">
        <h2>Kết quả tìm kiếm cho "{{ $query }}"</h2>

        @if ($listtin->count() > 0)
            <div class="row">
                @foreach ($listtin as $t)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/template/img/{{ $t->urlHinh }}" class="card-img-top" alt="{{ $t->tieuDe }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $t->tieuDe }}</h5>
                                <a href="{{ url('/chitiettin',[$t->id]) }}" class="btn btn-primary">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $listtin->appends(['query' => $query])->links() }}
        @else
            <p>Không tìm thấy kết quả nào.</p>
        @endif
    </div>
@endsection
