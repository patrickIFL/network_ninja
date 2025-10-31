<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ninja Network</title>
</head>
<body>

<header>
    <nav class="bg-gray-900 flex p-3 items-center justify-between">
        <a href="/">
            <h1 class="text-white text-2xl tracking-wider font-bold">NINJA NETWORK</h1>
        </a>

        <div class="flex gap-5 text-white items-center justify-center">

            <a class="hover:underline" href="/ninjas">List of Ninjas</a>
            <a class="hover:underline" href="/ninjas/create">Create New Ninjas</a>

        </div>
    </nav>

    <main class="cointainer max-w-6xl mx-auto">
        {{ $slot }}
    </main>

</header>
</body>
</html>
