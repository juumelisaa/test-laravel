<html>
<head>
    <title>My App</title>
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
