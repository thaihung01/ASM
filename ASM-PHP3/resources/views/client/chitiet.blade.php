@extends('client.layout.master')

@section('tieudetrang')
    {{$tin->tieuDe}}
@endsection
@section('content')
<div class="single-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sn-container">
                    <div class="sn-img">
                        <img src="/template/img/{{$tin->urlHinh}}" />
                    </div>
                    <div class="sn-content">
                        <h2 class="sn-title">{{$tin->tieuDe}}"</h2>
                        <p>
                            {{$tin->noiDung}}
                        </p>
                    </div>
                </div>
                <div class="sn-related">
                    <h2>Tin tức liên quan</h2>
                    <div class="row sn-slider">
                        <div class="col-md-4">
                            <div class="sn-img">
                                <img src="/template/img/anh2.jpg" />
                                <div class="sn-title">
                                    <a href="">NÓNG HLV Southgate từ chức tuyển Anh sau thất bại chung kết EURO</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sn-img">
                                <img src="/template/img/anh3.jpg" />
                                <div class="sn-title">
                                    <a href="">Tân binh 42,5 triệu euro của Man Utd có gì đặc biệt?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sn-img">
                                <img src="/template/img/anh4.jpg" />
                                <div class="sn-title">
                                    <a href="">HLV Ten Hag - Sancho dần làm lành, ca ngợi á quân C1 là cầu thủ giỏi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h2 class="sw-title">Trong danh mục này</h2>
                        <div class="news-list">
                            <div class="nl-item">
                                <div class="nl-img">
                                    <img src="/template/img/anh2.jpg" />
                                </div>
                                <div class="nl-title">
                                    <a href="">NÓNG HLV Southgate từ chức tuyển Anh sau thất bại chung kết EURO</a>
                                </div>
                            </div>
                            <div class="nl-item">
                                <div class="nl-img">
                                    <img src="/template/img/anh3.jpg" />
                                </div>
                                <div class="nl-title">
                                    <a href="">Tân binh 42,5 triệu euro của Man Utd có gì đặc biệt?</a>
                                </div>
                            </div>
                            <div class="nl-item">
                                <div class="nl-img">
                                    <img src="/template/img/anh4.jpg" />
                                </div>
                                <div class="nl-title">
                                    <a href="">HLV Ten Hag - Sancho dần làm lành, ca ngợi á quân C1 là cầu thủ giỏi</a>
                                </div>
                            </div>
                            <div class="nl-item">
                                <div class="nl-img">
                                    <img src="/template/img/anh5.jpg" />
                                </div>
                                <div class="nl-title">
                                    <a href="">HLV Southgate từ chức ở tuyển Anh, báo chí tiết lộ tham vọng thay Ten Hag dẫn MU</a>
                                </div>
                            </div>
                            <div class="nl-item">
                                <div class="nl-img">
                                    <img src="/template/img/anh6.jpg" />
                                </div>
                                <div class="nl-title">
                                    <a href="">Thần đồng Yamal tiếp tục ẵm giải EURO, vượt siêu phẩm Bellingham - Palmer</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h2 class="sw-title">Thể loại tin tức</h2>
                        <div class="category">
                            <ul>
                                <li><a href="">Quốc gia</a><span>(98)</span></li>
                                <li><a href="">Quốc tế</a><span>(87)</span></li>
                                <li><a href="">Kinh tế học</a><span>(76)</span></li>
                                <li><a href="">Chính trị</a><span>(65)</span></li>
                                <li><a href="">Cách sống</a><span>(54)</span></li>
                                <li><a href="">Công nghệ</a><span>(43)</span></li>
                                <li><a href="">Giao dịch</a><span>(32)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection