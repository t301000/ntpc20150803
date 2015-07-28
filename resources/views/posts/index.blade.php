@extends('layouts.master')


@section('main-content')

    <!-- 頁面標題與按鈕 -->
    @include('posts.partials.page_head')

    <!-- 主要內容區與側邊欄 -->
    <div class="row">

        <!-- 主要內容區 -->
        <div class="col-md-9">

            <div class="well well-lg">

                @include('partials.notification')

                @foreach($posts as $post)
                    <!-- 一篇文章 -->
                    <div class="panel panel-default my-article">
                        <div class="panel-heading">
                            <h4><a href="{{ route('posts.show', [$post->id]) }}">{{ $post->title }}</a></h4>
                        </div>
                        <div class="panel-body">
                            {!! str_limit($post->content, 200) !!}

                            @if(mb_strlen($post->content)>200)
                                <div class="text-right">
                                    <a href="{{ route('posts.show', [$post->id]) }}">
                                        <span style="color: red;">繼續閱讀....</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="panel-footer">
                            作者： <a href="oneuserposts.html">{{ $post->user->name }}</a>
                            <div class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;發表於： {{ $post->created_at }}</div>
                            <div class="pull-right">觀看次數： {{ $post->page_views }} 次</div>
                            <div class="my-tags">
                                Tags:
                                @foreach($post->tags as $tag)
                                    <a href="{{ route('posts.tag', [$tag->id]) }}"><span class="tag">{{ $tag->title }}</span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- 一篇文章 結束 -->
                @endforeach

                <!-- 分頁 -->
                <div class="text-center">
                    {!! $posts->render() !!}
                </div>
                <!-- 分頁 結束 -->

            </div>

        </div>
        <!-- 主要內容區 結束 -->

        {{-- 側邊欄 --}}
        @include('partials.sidebar')

    </div>
    <!-- 主要內容區與側邊欄 -->
@endsection
{{-- main-content end --}}