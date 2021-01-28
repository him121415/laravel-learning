@extends('layout')

@section('content')
    <div class="section animated-row">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-7 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        {{-- <span>我的技能</span> --}}
                        <h2>我的技能</h2>
                    </div>
                    <div class="skills-row animate" data-animate="fadeInDown">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                {{-- <div class="skill-item">
                                    <h6>C++</h6>
                                    <div class="skill-bar">
                                        <span>40%</span>
                                        <div class="filled-bar"></div>
                                    </div>
                                </div> --}}

                                <div class="skill-item">
                                    <h5>C++</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <h5>C#</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <h5>Python</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>
                                </div>
                                {{-- <div class="skill-item last-skill">
                                    <h6>Leadership</h6>
                                    <div class="skill-bar">
                                        <span>90%</span>
                                        <div class="filled-bar-2"></div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
