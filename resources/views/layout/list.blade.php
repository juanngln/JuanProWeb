<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <h1 class="text-xl font-bold ml-20 mt-10">List Produk</h1>
    <div class="container mx-auto mt-5">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>