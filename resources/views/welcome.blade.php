<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased">
    <section class="mt-2">
        <div class="text-2xl text-bold text-center">
            Counter
        </div>
        <livewire:counter />
    </section>
    <br></br>
    <section class="mt-2 py-2">
        <div class="text-2xl text-bold text-center">
            Photo Upload
        </div>
        <livewire:upload-photo />
    </section>
    @livewireScripts
</body>

</html>
