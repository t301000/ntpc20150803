@if ($errors->any())
    <div class="alert alert-danger alert-dismissible animated fadeIn" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>錯誤！</strong> 請檢查你填寫的資料
    </div>
@endif

@if(session('msg'))
    <div class="alert alert-dismissable alert-{{ session('msg')['status'] }} animated fadeIn">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('msg')['content'] }}
    </div>
@endif

@if(session('status'))
    <div class="alert alert-dismissable alert-info animated fadeIn">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
@endif