<!doctype html>
<html lang="en">
    <head>
        <title>HealthEase</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        @vite("resources/css/app.css")
    
    </head>
    
    </head>
        @include('layout.loader')
    <body>

        <main>
                @yield("content")
        </main>

        <!-- Bootstrap JavaScript Libraries -->
        @vite("resources/js/app.js")
    </body>
</html>
