@extends('layout')

@section('content')
    <div class="section animated-row">
        <div class="section-inner">
            <div class="about-section">
                <div class="row justify-content-center">
                    <div class="col-lg-8 wide-col-laptop">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-contentbox">
                                    <div class="animate" data-animate="fadeInUp">
                                        <h2>關於我</h2>
                                        {{-- <p>Credits go to <strong>Unsplash</strong> and <strong>Pexels</strong> for photos and video used in this template. Vivamus tincidunt, augue rutrum convallis volutpat, massa lacus tempus leo.</p> --}}
                                        <p>
                                            個性較為內向，從小數理邏輯方面表現較佳，以及喜歡動腦的事物。<br>
                                            大學專題原製作<strong>「以放射性特徵為基礎之中文字辨識」</strong>但辨識效果不佳<br>
                                            而換<strong>「手寫中文字辨識」</strong>，文字在第一位機率為70.11％。<br>
                                            曾在傳產業協助開發APP、醫院當任資訊助理與協助建立屏東縣國中小縣網之設備安裝及設定。
                                        </p>
                                    </div>
                                    <div class="facts-list owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="counter-box">
                                                <i class="fa fa-desktop counter-icon" aria-hidden="true"></i><span class="count-number">2</span> 經歷年數
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="counter-box">
                                                <i class="fa fa-certificate counter-icon" aria-hidden="true"></i><span class="count-number">6</span> 技能證照
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <figure class="about-img animate" data-animate="fadeInUp"><img src="images/profile-me.jpg" class="rounded" width="450" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
