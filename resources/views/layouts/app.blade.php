<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="png" href="{{ asset('images/LogoTB.png') }}">

    <title>{{ $title ?? 'Starlibrary' }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')

    {{ $slot }}
</body>

</html>
