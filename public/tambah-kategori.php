<?php require 'functions/functions.php';
$lists = query( "SELECT * FROM kategori");
require 'head.php'?>

<body class="bg-blue-200">
    <?php require 'header-admin.php'?>
    <main class="mx-5 lg:pl-64">
        <section class="mt-1 mb-3 min-h-screen pt-16" id="2">
            <h1 class="my-3 text-2xl font-semibold">Tambah Produk</h1>
            <div class="flex flex-wrap lg:flex-nowrap gap-3 mx-auto p-3 h-auto bg-slate-200 items-center">
                <div class="flex flex-col w-full lg:w-2/3 order-2 lg:order-1 p-3 bg-slate-400">
                    <h1>Daftar Kategori</h1>
                    <ul class="list-disc list-outside pl-3">
                        <?php foreach($lists as $kategori) :?>
                        <li class="first-letter:uppercase">
                            <?=$kategori['list'] ?>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <form action="" method="post" class="flex flex-col w-full lg:w-1/3 order-1 lg:order-2">
                    <label for="kategori">Tambah Kategori</label>
                    <div class="flex gap-3 items-stretch">
                        <input type="text" id="kategori"
                            class="rounded-3xl bg-white/40 focus:outline-none focus:ring-0">
                        <button type="submit"
                            class="py-2 px-3 bg-slate-700 rounded-md text-slate-200 self-center text-sm">😊</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php require 'footer-admin.php' ?>
    <script>
    document.title = 'Tambah'
    </script>
</body>

</html>