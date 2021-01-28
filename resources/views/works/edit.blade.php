@extends('layout')

@section('content')
    <div class="section animated-row">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">

                        <h1 class="h1">修改作品</h1>

                        <form method="POST" action="/works/{{ $work->id }}">
                            @csrf
                            @method('PUT')

                            <div class="field">
                                <label class="form-label" for="title">標題</label>

                                <div class="control">
                                    <input
                                    class="form-control @error('title') is-invalid @enderror"
                                    type="text"
                                    name="title"
                                    id="title"
                                    value="{{ old('title',  $work->title) }}">

                                    @error('title')
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="field">
                                <label class="form-label" for="url">連結</label>

                                <div class="control">
                                    <input class="form-control @error('url') is-invalid @enderror"
                                    type="text"
                                    name="url"
                                    id="url"
                                    value="{{ old('url', $work->url) }}">

                                    @error('url')
                                        <p class="text-danger">{{ $errors->first('url') }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="field">
                                <label class="form-label" for="content">說明</label>

                                <div class="control">
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content">{{ old('cotnent', $work->content) }} </textarea>

                                    @error('content')
                                        <p class="text-danger">{{ $errors->first('content') }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button class="btn btn-primary mb-3" type="submit">修改</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
