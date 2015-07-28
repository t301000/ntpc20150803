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

                <!-- 文章 -->
                <div class="panel panel-default my-article">
                    {{-- 編輯/刪除按鈕 --}}
                    @if(Auth::user() && Auth::user()->id == $post->user_id)
                    <div class="text-right" style="padding-right: 15px;">
                        {{--<form action="" method="POST">--}}
                        {!! Form::open(['route' => ['posts.delete', $post->id], 'method' => 'DELETE']) !!}
                            <a class="btn btn-material-blue btn-lg" href="{{ route('posts.edit', [$post->id]) }}"><i class="fa fa-edit"></i> 編輯</a>
                            <button class="btn btn-danger btn-lg" type="submit"><i class="fa fa-trash"></i> 刪除</button>
                        {!! Form::close() !!}
                    </div>
                    @endif

                    <div class="panel-body">
                        {!! $post->content !!}
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
                <!-- 文章 結束 -->

                <!-- 發表評論表單 -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="my-form">
                            {{--<form class="form-horizontal" action="" method="POST">--}}
                            {!! Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                                <div class="form-group">
                                    <input class="form-control floating-label input-lg" type="text" name="name" value="{{ old('name') }}" placeholder="姓名" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control floating-label input-lg" type="email" name="email" value="{{ old('email') }}" placeholder="電子郵件" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control floating-label input-lg" name="content" rows="5" placeholder="回應內容" required>{{ old('content') }}</textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-plus"></i> 發表回應</button>
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- 發表評論表單 結束 -->

                <!-- 顯示評論 -->
                @foreach($post->comments as $comment)
                    <!-- 一篇評論 -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $comment->name }} 回應於　{{ $comment->created_at }}
                        </div>
                        <div class="panel-body">
                            {{ $comment->content }}
                        </div>
                    </div>
                    <!-- 一篇評論 結束 -->
                @endforeach
                <!-- 顯示評論 結束 -->

            </div>

        </div>
        <!-- 主要內容區 結束 -->

        {{-- 側邊欄 --}}
        @include('partials.sidebar')

    </div>
    <!-- 主要內容區與側邊欄 -->
@endsection
{{-- main-content end --}}