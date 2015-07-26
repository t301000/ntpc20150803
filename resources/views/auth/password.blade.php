@extends('layouts.master')

@section('main-content')

    <div class="row">

        <!-- 登入區塊 -->
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron about-jumbotron animated fadeIn">
                <h2 class="page-header">忘記密碼</h2>

                @include('partials.notification')

                <div class="row">
                    <!-- 左欄 -->
                    <div class="col-md-7">
                        <div class="my-form">
                            {!! Form::open(['route' => 'forgetpassword.process', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                                <div class="form-group">
                                    <input class="form-control floating-label input-lg" type="email" name="email" placeholder="電子郵件" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-lg" type="submit">
                                        <i class="fa fa-envelope-o"></i> 取得重設密碼連結
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- 左欄 end -->

                    <!-- 右欄 social login -->
                    <div class="col-md-5">
                        {!! Form::open(['route' => 'openid.redirect', 'method' => 'POST']) !!}
                        <button class="btn btn-material-orange btn-block" type="submit" style="color: rgba(255, 255, 255, 0.843137);">
                            <i class="fa fa-openid fa-2x"></i> NTPC OpenID
                        </button>
                        {!! Form::close() !!}

                        <div class="btn btn-material-blue btn-block">
                            <i class="fa fa-facebook-square fa-2x"></i> facebook
                        </div>

                        <div class="btn btn-material-red btn-block">
                            <i class="fa fa-google-plus-square fa-2x"></i> google
                        </div>
                    </div>
                    <!-- 右欄 social login end -->

                </div>
            </div>
        </div>
        <!-- 登入區塊 結束 -->

    </div>


@endsection