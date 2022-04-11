<?php require 'head.php';
$products = query( "SELECT * FROM products");
?>

<body class="bg-blue-200">
    <?php require 'header-admin.php' ?>
    <main class="mx-5 lg:pl-64">
        <section class="mt-1 mb-3 min-h-screen pt-16" id="2">
            <div class="flex justify-between items-center">
                <h1 class="my-3 text-2xl font-semibold">Daftar Produk</h1>
                <label class="my-3 text-2xl font-semibold" for="search">Cari <i
                        class="fa-duotone fa-magnifying-glass"></i>
                    <input type="text" id="search">
                </label>
            </div>
            <div class="h-2/3 overflow-x-auto overflow-y-auto rounded-lg bg-white p-5">
                <table class="w-max min-w-full text-sm">
                    <thead class="border-separate bg-slate-400 shadow-black drop-shadow-lg font-black">
                        <tr>
                            <th class="rounded-tl py-2">No</th>
                            <th class="py-2 w-60">Produk</th>
                            <th class="py-2">Kategori</th>
                            <th class="py-2 w-fit">Harga</th>
                            <th class="py-2">Harga Promo</th>
                            <th class="py-2">Status</th>
                            <th class="rounded-tr py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="p-3 text-center">
                        <?php 
                        $i = 1 ;
                        foreach($products as $product) : ?>
                        <tr class="odd:bg-slate-200 even:bg-slate-400 align-middle">
                            <td class="p-3"><?=$i?></td>
                            <td class="p-3 flex items-center justify-start gap-2 w-60">
                                <img src="assets/img/produk/<?=$product['image']?>" alt="" srcset="" class="w-20">
                                <span class="line-clamp-2 text-left"><?=$product['produk']?></span>
                            </td>
                            <td class="p-3 first-letter:uppercase"><?=$product['kategori']?>
                            </td>
                            <td class="p-3 w-fit">Rp <?= number_format($product['price'],0,',','.')?>,-</td>
                            <td class="p-3">Rp <?= number_format($product['promo'],0,',','.')?>,-</td>
                            <td class="p-3 first-letter:uppercase"><?=$product['status']?></td>
                            <td class="text-white p-3">
                                <span class=" gap-2 flex justify-center">
                                    <a href="#" target="_blank"
                                        class=" bg-green-700 px-2 py-1 rounded-sm hover:bg-green-500 hover:text-red-800">
                                        <i class="fa-duotone fa-pen-to-square"></i>
                                    </a>
                                    <a href="hapus?id=<?=$product['id']?>"
                                        class="bg-sky-700 py-1 px-2 rounded-sm hover:opacity-20 hover:text-red-800">
                                        <i class="fa-duotone fa-delete-right"></i>
                                    </a>
                                </span>
                            </td>
                        </tr>
                        <?php 
                        $i++;
                        endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <?php require 'footer-admin.php'?>
</body>

</html>