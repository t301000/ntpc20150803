<!-- 標題與浮動按鈕 -->
<div class="row">

    <div class="col-md-9">
        <h2 class="page-header text-primary pull-left">{{ $page_title }}</h2>
    </div>

    <div class="col-md-3">
        <div class="pull-right my-sidebar-top-btn-wrapper">
            <a href="{{ route('posts.create') }}" class="btn btn-material-green btn-lg btn-block">
                <i class="fa fa-plus"></i> 新增文章
            </a>
        </div>
    </div>

</div>
<!-- 標題與浮動按鈕 結束 -->