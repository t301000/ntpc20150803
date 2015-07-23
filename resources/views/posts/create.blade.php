@extends('layouts.master')


@section('main-content')

    <!-- 頁面標題與按鈕 -->
    @include('posts.partials.page_head')

    <!-- 主要內容區與側邊欄 -->
    <div class="row">

        <!-- 主要內容區 -->
        <div class="col-md-9">

            <div class="well well-lg animated slideInUp">

                @include('partials.notification')

                <div class="my-form">
                    {!! Form::open(['route' => 'posts.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <input class="form-control floating-label input-lg" type="text" name="title" placeholder="文章標題" value="{{ old('title') }}" required autofocus>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control floating-label input-lg" name="content" rows="20" placeholder="文章內容" required>{{ old('content') }}</textarea>
                        </div>

                        <div class="form-group text-right">
                            <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-plus"></i> 發表文章</button>
                        </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
        <!-- 主要內容區 結束 -->

        {{-- 側邊欄 --}}
        @include('partials.sidebar')

    </div>
    <!-- 主要內容區與側邊欄 -->
@endsection
{{-- main-content end --}}