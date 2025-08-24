<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Post App</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <aside class="w-1/5 h-full bg-gray-800 text-gray-100 fixed left-0 top-0 py-4 flex flex-col items-center">
        <div class="mb-5 flex flex-col items-center">
            <div class="w-[80px] h-[80px] overflow-hidden rounded-[50%]">
                <img src="https://placehold.co/600x400" class="w-full h-full object-cover">
            </div>
            <h6 class="mt-3 text-xl">Hi, Rangga</h6>
        </div>
        <div class="w-full mt-10 px-3">
            <x-sidebarlink href="/" icon="home">Home</x-sidebarlink>
            <x-sidebarlink href="/" icon="auto_awesome_mosaic">Posts</x-sidebarlink>
            <x-sidebarlink href="/" icon="account_circle">Profile</x-sidebarlink>
        </div>
        <div class="w-full h-full flex flex-col-reverse px-3">
            <x-sidebarlink href="/" icon="logout">Logout</x-sidebarlink>
        </div>
    </aside>
</body>

</html>
