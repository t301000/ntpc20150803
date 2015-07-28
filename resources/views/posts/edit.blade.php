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
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <input class="form-control floating-label input-lg" type="text" name="title" placeholder="文章標題" value="{{ old('title') ? : $post->title }}" required autofocus>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="ckeditor" name="content" rows="20" required>{{ old('content') ? : $post->content }}</textarea>
                        </div>

                        @foreach($tags as $tag)
                            <div class="checkbox my-tag">
                                <label>
                                    <input type="checkbox" name="tag[]" value="{{ $tag->id }}"
                                           @if(old('tag') && in_array($tag->id, old('tag')))
                                                checked
                                           @elseif($post->tags && in_array($tag->id, array_pluck($post->tags->toArray(), 'id')))
                                                checked
                                           @endif > {{ $tag->title }}
                                </label>
                            </div>
                        @endforeach

                        <div class="form-group text-right">
                            <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-refresh"></i> 更新文章</button>
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

@section('script')
    @include('posts.partials.ckeditor')
@endsection