@extends('layout')

@section('content')
    <div class="section animated-row">
        <div class="section-inner">
            <div class="welcome-box">
                <span class="welcome-first animate" data-animate="fadeInUp">您好，歡迎來訪</span>
                <h1 class="welcome-title animate" data-animate="fadeInUp">Laravel 練習</h1>
                <p class="animate" data-animate="fadeInUp">
                    這裡是我練習 PHP框架 - Laravel 的網頁<br>
                    主要使用到Route至Controller再拜訪View<br>
                    以及RESTful與MySQL操作
                </p>
            </div>
        </div>
    </div>
@endsection()
