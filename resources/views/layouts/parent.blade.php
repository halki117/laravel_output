<html>
    <head>
        <title>Laravel | @yield('title','Home')</title>
    </head>
    <body>
        @section('top')
            <p>親テンプレート</p>
        @show


        <div class="content">
            <p>コンテンツ</p>
            @yield('content')
        </div>
    </body>

    
</html>