<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('css')
</head>

<body>
    <header>
        <h1>header</h1>

    </header>
    <main>
        <aside>
            @section('sidebar')
                @include('clients.block.sidebar')
            @show
            
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
        footer
    </footer>
</body>
<Script type="text/javascript">
    @yield('js')
</Script>
</html>