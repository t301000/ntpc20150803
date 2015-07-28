<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
    $(document).ready(function(){
        CKEDITOR.replace('ckeditor',{
            toolbar: 'Full',
//            toolbar_My:[
//                { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
//                { name: 'editing', items: [ 'Scayt' ] },
//                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
//                { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
//                '/',
//                { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat', 'JustifyRight' ] },
//                { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
//                { name: 'styles', items: [ 'Format'] },
//                { name: 'tools', items: [ 'Maximize' ] },
//                { name: 'document', items: [ 'Source' ] },
//            ],
            //skin: 'moono'
        });
    });
</script>