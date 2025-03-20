<?php require 'template/header.php'; ?>

<main class="mx-auto max-w-screen-lg px-8 py-4 flex flex-col gap-4 my-4">
    <div class="book flex flex-col gap-4 bg-red-400 p-3 rounded-md bg-stone-900">
        <div class="book-info flex gap-4">
            <div class="book-image flex-1">
                <img class="w-full rounded-md" src="https://loremflickr.com/200/200?random=1" alt="Book cover">
            </div>
            <div class="book-content flex-2 flex flex-col gap-2">
                <h2 class="text-md leading-[1.4] font-semibold"><a class="hover:underline" href="/book?id=<?= $book['id'] ?>"> <?= $book['title'] ?></a></h2>
                <p class="text-xs italic"><?= $book['author'] ?></p>
                <span class="text-xs">⭐️⭐️⭐️⭐️⭐️</span>
            </div>
        </div>
        <div class="book-description text-sm">
            <p><?= $book['description'] ?></p>
        </div>
    </div>

</main>

<?php require 'template/footer.php'; ?>