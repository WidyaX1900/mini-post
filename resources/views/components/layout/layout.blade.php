<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Post App</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-gray-800 text-gray-50 w-full p-3 flex justify-between items-center fixed top-0 left-0">
        <a href="/">
            <h1 class="font-semibold text-2xl">Mini Post</h1>
        </a>
        <div class="w-1/3 flex justify-around">
            <x-navlink href="/" request="{{ request()->path() === '/' }}">Home</x-navlink>            
            <x-navlink href="/post" request="{{ request()->path() === 'post' }}">Post</x-navlink>            
            <x-navlink href="/about" request="{{ request()->path() === 'about' }}">About</x-navlink>            
            <x-navlink href="/contact" request="{{ request()->path() === 'contact' }}">Contact</x-navlink>            
        </div>
    </nav>
    <div class="mt-16 px-10">
        {{ $slot }}
    </div>
</body>
</html>