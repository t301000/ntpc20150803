@extends('layouts.master')


@section('main-content')

    <!-- 頁面標題與按鈕 -->
    @include('posts.partials.page_head')

    <!-- 主要內容區與側邊欄 -->
    <div class="row">

        <!-- 主要內容區 -->
        <div class="col-md-9">

            <div class="well well-lg">

                <!-- 文章 -->
                <div class="panel panel-default">
                    <div class="text-right" style="padding-right: 15px;">
                        <form action="" method="POST">
                            <a class="btn btn-material-blue btn-lg" href="editpost.html"><i class="fa fa-edit"></i> 編輯</a>
                            <button class="btn btn-danger btn-lg" type="submit"><i class="fa fa-trash"></i> 刪除</button>
                        </form>
                    </div>
                    <div class="panel-body">
                        {{ $post->content }}
                    </div>
                    <div class="panel-footer">
                        作者： <a href="oneuserposts.html">{{ $post->user->name }}</a>
                        <div class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;發表於： {{ $post->created_at }}</div>
                        <div class="pull-right">觀看次數： {{ $post->page_views }} 次</div>
                    </div>
                </div>
                <!-- 文章 結束 -->

                <!-- 發表評論表單 -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="my-form">
                            <form class="form-horizontal" action="" method="POST">
                                <div class="form-group">
                                    <input class="form-control floating-label input-lg" type="text" name="name" value="zzzz" placeholder="姓名" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control floating-label input-lg" type="email" name="email" placeholder="電子郵件" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control floating-label input-lg" name="content" rows="5" placeholder="回應內容" required></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-plus"></i> 發表回應</button>
                                </div>

                            </form>
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