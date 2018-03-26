<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('blocks.header')
    @yield('categories')
    <div class="button_up">^</div>
        @yield('content')
    <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"
            type="text/javascript" charset="utf-8" ></script>
    <script src = "{{url('js/jquery-3.2.0.min.js')}}"></script>
    <script src = "{{url('js/fnmenu.jquery.js')}}"></script>
    <script src = "{{url('js/slick.min.js')}}"></script>
    <script src = "{{url('js/script.js')}}"></script>
    <script>
        var editor = CKEDITOR.replace( 'content',
            {
                filebrowserImageBrowseUrl: '{{url('/laravel-filemanager?type=Images')}}',
                filebrowserImageUploadUrl: '{{url('/laravel-filemanager/upload?type=Images&_token=')}}',
                filebrowserBrowseUrl: '{{url('/laravel-filemanager?type=Files')}}',
                filebrowserUploadUrl: '{{url('/laravel-filemanager/upload?type=Files&_token=')}}'

            } );
    </script>
    @include('blocks.footer')
</body>
</html>