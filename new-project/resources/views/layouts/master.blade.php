<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Network  | @yield('title')</title>
</head>
<body>
    @include("partials.nav ")
    <main>
        <div class="m-3">
            @yield('main')
        </div>
    </main>
    @include("partials.footer ")
</body>
</html>