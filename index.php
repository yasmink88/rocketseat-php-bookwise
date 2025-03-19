<?php
    require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWise</title>
</head>
<body class="bg-zinc-950 text-gray-300">
    <header class="bg-stone-900 text-green-400">
        <nav class="mx-auto max-w-screen-lg flex justify-between  px-8 py-4">
            <div class="logo font-bold text-xl text-gray-100">BookWise</div>
            <ul class="flex gap-4">
                <li><a href="/" class="hover:underline">Explore</a></li>
                <li><a href="#" class="hover:underline">My books</a></li>
            </ul>
            <div class="login">
                <a href="#" class="hover:underline">Login</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg px-8 py-4 flex flex-col gap-4 my-4">
        <h1 class="hidden">Explore books</h1>

        <form class="w-full flex gap-2">
            <input
            class="text-gray-400 w-full text-sm rounded-full border-gray-100 border-1 px-2 py-1 focus:outline-none" type="text" 
            name="Search" id="search"
            placeholder="Search for books...">
            <button type="submit">Search</button>
        </form>

        <section class="book-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 my-4">
            <?php foreach ($books as $book): ?>
                <div class="book flex flex-col gap-4 bg-red-400 p-3 rounded-md bg-stone-900">
                    <div class="book-info flex gap-4">
                        <div class="book-image flex-1">
                            <img class="w-full rounded-md"src="https://loremflickr.com/200/200?random=1" alt="Book cover">
                        </div>
                        <div class="book-content flex-2 flex flex-col gap-2">
                            <h2 class="text-md leading-[1.4] font-semibold"><a class="hover:underline" href="/book.php?id=<?= $book['id'] ?>"> <?=$book['title'] ?></a></h2>
                            <p class="text-xs italic"><?= $book['author'] ?></p>
                            <span class="text-xs">⭐️⭐️⭐️⭐️⭐️</span>
                        </div>
                    </div>
                    <div class="book-description text-sm">
                        <p><?= $book['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
    
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</body>
</html>