<html>
<head>
    <title>My App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <header>Navbar here</header>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
