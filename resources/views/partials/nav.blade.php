<!-- navigation bar -->
<nav class="navbar navbar-material-blue navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">{{ config('siteconfig.site_title') }}</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('posts.index') }}"><i class="fa fa-list-ul my-icon"></i> 文章總覽</a></li>
                <li><a href="{{ route('posts.hot') }}"><i class="fa fa-fire my-icon"></i> 熱門文章</a></li>
                <li><a href="{{ route('about') }}"><i class="fa fa-info-circle my-icon"></i> 關於本站</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('register.index') }}"><i class="fa fa-plus my-icon"></i> 註冊</a></li>
                    <li><a href="{{ route('login.index') }}"><i class="fa fa-sign-in my-icon"></i> 登入</a></li>
                @elseif(Auth::check())
                    <li class="dropdown">
                        <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user my-icon"></i> {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="admin.html"><i class="fa fa-cogs my-icon"></i> 管理區</a></li>
                            <li><a href="profile.html"><i class="fa fa-user my-icon"></i> 帳號資訊</a></li>
                            <li><a href="{{ route('posts.my') }}"><i class="fa fa-list-ul my-icon"></i> 我的文章</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout.process') }}"><i class="fa fa-sign-out my-icon"></i> 登出</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- navigation bar end -->