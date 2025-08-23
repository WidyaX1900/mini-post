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
            <a href="/" class="text-gray-50/75 hover:text-gray-50 hover:text-xl transition-all duration-200 active:text-lg">Home</a>
            <a href="/" class="text-gray-50/75 hover:text-gray-50 hover:text-xl transition-all duration-200">Post</a>
            <a href="/" class="text-gray-50/75 hover:text-gray-50 hover:text-xl transition-all duration-200">Contact</a>
            <a href="/" class="text-gray-50/75 hover:text-gray-50 hover:text-xl transition-all duration-200">Profile</a>
        </div>
    </nav>
</body>
</html>