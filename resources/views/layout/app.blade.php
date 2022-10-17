<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('metaTitle', 'Sito web ufficiale')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css'), 'DC Comics' }}">
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    </head>
    <body>
        
        {{-- header --}}
        @include('partials.header')

        <main>
            <div class="jumbotron">
            </div>
            @yield('content')
        </main>

        {{-- footer --}}
        @include('partials.footer')
    </body>
</html>