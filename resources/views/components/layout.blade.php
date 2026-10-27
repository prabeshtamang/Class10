<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Class10' }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        .container {
            width: 86%;
            margin: auto;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900">

    {{-- Header --}}
    <header>
        @include('components.header')
    </header>


    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>


    {{-- Footer --}}
    <footer>
        @include('components.footer')
    </footer>

</body>

</html>
