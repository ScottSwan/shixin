@extends('admin.right')

@section('htmlheader_title')

@endsection

@section('content')
    <div class="editorMain box box-primary " style="padding: 10px;">
        {!! $edit !!}
    </div>
@endsection

@section('otherheader')
    <script type="text/javascript" src="{{asset('/static/js/uploadify-v2.1.4/swfobject.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('/static/js/uploadify-v2.1.4/jquery.uploadify.v2.1.4.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/static/js/uploadify-v2.1.4/uploadify.css')}}">
@endsection

@section('otherfooter')
    <script type="text/javascript" src="{{asset('static/js/file_single_upload_rapyd.js')}}"></script>
    <script>
        $(function(){
            Img_upload.init('image_id');
        });
    </script>
@endsection
