@extends('layout')

@section('content')
    <div class="section animated-row">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <a href="https://github.com/him121415">
                            <h2>我的作品</h2>
                        </a>
                    </div>
                    <div class="gallery-section">
                        <div class="gallery-list owl-carousel">
                            @forelse ($works as $work)
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                        <div class="thumb">
                                            <img src="images/item-1.jpg" alt="">
                                        </div>
                                        <div class="thumb-inner animate" data-animate="fadeInUp" >
                                            <a href="{{ $work->url }}">
                                                <h4>
                                                    {{ $work->title }}
                                                </h4>
                                            </a>
                                            <p>{{ $work->content }}</p>
                                        </div>
                                </div>
                            </div>
                            @empty
                                <p>目前沒有作品</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
