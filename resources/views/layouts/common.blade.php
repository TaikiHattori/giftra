<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>giftra</title>




        <!-- cssをインポート -->
       


    </head>
    <body>

    <!-- ヘッダーフッターの使いまわし -->
        @include('parts.header')
        @yield('content')
        @include('parts.footer')

       
    </body>
</html>
