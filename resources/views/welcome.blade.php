<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div id="app" class="h-screen w-full flex justify-center items-center">
            <comment-form class="w-1/2" :data-comments="{{ $comments }}"></comment-form>
        </div>
        <script src="/js/app.js"> </script>
    </body>
</html>

