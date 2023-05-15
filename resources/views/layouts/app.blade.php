<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>TrenItalia</title>
    
</head>
<body>
    @include('partials.header')

    <main>
        <div class="container" style="display: flex; flex-wrap:wrap;">
            @yield('content')
        </div>
    </main>
    @include('partials.footer')


    
</body>
</html>