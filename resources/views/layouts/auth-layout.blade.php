<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body class="flex justify-center items-center min-h-screen bg-bg">
        <div class="w-fit">
            <nav class="w-full text-2xl text-text bg-primary py-6 px-4 rounded-t-xl">
                <h1>KauQ - Plugg hjälp</h1>
            </nav>
            {{ $slot }}
        </div>
    </body>
</html>
