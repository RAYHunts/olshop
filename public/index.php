<?php
require 'head.php';
$lists = query( "SELECT list FROM kategori");
?>

<body class="bg-slate-500 font-monts select-none">
    <header>
        <nav class="fixed top-0 z-50 hidden h-14 w-full items-center justify-between bg-blue-200 p-5 sm:flex">
            <div>
                <a href="#">Brand</a>
            </div>
            <div class="flex gap-3">
                <div>
                    <a href="">Home</a>
                </div>
                <div>
                    <a href="">Kategori</a>
                </div>
                <div>
                    <a href="https://web.whatsapp.com/send?text=my message&phone=+6295256609727&abid=+XXXXXXXXXXX">Whatsapp
                        me please</a>
                    <a href="">Contact</a>
                    <a
                        href="https://wa.me/6285156609727?text=Halo%20kak%20Ayn%0ASaya%20tertarik%20dengan%20produk%20berikut%0ANama%20%3A%20%27p%27%0AHarga%20%3A%20~Rp%20%27p%27~%2C-%0AHarga%20Promo%20%3A%20Rp%20%27p%27%2C-%0A">Hello,
                        world!</a>
                </div>
            </div>
        </nav>
        <nav
            class="fixed bottom-0 z-50 flex h-14 w-full items-center justify-between border-t border-slate-800 bg-blue-200 p-5 sm:hidden">
            <div class="flex flex-col items-center justify-center">
                <i class="fa-duotone fa-house-user"></i>
                <a href="#Home">Home</a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <i class="fa-duotone fa-shop"></i>
                <a href="#product">Products</a>
            </div>
            <a class="flex flex-col items-center justify-center" href="#contact"> <i
                    class="fa-duotone fa-address-book"></i><span>Contact</span></a>
        </nav>
    </header>
    <main class="pb-16">
        <section class="h-max py-2 px-3 pt-16">
            <h1 class="ml-6 text-2xl">Banner</h1>
            <div class="list-product mt-3 flex w-full justify-start gap-3 overflow-x-scroll rounded-md px-7 lg:px-11">
                <div class="bg-[url('../assets/img/produk.jpeg')] produk-carousel">
                </div>
                <div
                    class="relative h-80 min-w-[calc(100vw-5rem)] rounded-md bg-[url('../assets/img/logo.jpeg')] bg-cover md:min-w-[40rem]">
                </div>
                <div
                    class="relative h-80 min-w-[calc(100vw-5rem)] rounded-md bg-[url('../assets/img/produk.jpeg')] bg-cover md:min-w-[40rem]">
                </div>
            </div>
        </section>
        <section class="flex h-max flex-col gap-3 px-3 lg:px-7">
            <?php foreach($lists as $kategori) : 
            $kategori = $kategori['list'];
            $products = query( "SELECT * FROM products WHERE kategori = '$kategori' ");
            if(isset($products[0])) :
            ?>
            <h1 class="ml-6 text-2xl">
                <?= ucwords($kategori) ?>
            </h1>
            <div class="list-produk">
                <?php foreach($products as $product) :?>
                <div class="produk">
                    <img src="" alt="">
                    <img class="h-40 w-40" src="assets/img/produk/<?=$product['image']?>" alt="<?=$product['image']?>">
                    <div class="flex h-max flex-col justify-between w-full gap-2 overflow-hidden p-3">
                        <p class="text-sm line-clamp-2"><?= $product['produk'] ?></p>
                        <?php if($product['promo'] != 0) : ?>
                        <p class="text-sm font-bold">Rp
                            <?= number_format($product['promo'],0,',','.') ?>,-</p>
                        <p><span
                                class="mr-2 h-1 w-2 rounded-sm bg-red-200 p-1 text-xs font-bold text-red-900 no-underline"><?= floor((($product['price']-$product['promo'])/$product['price'])*100) ?>%</span><span
                                class="text-xs line-through">Rp
                                <?= number_format($product['price'],0,',','.') ?></span>,-
                        </p>
                        <?php else :?>
                        <p class="text-sm font-bold">Rp
                            <?= number_format($product['price'],0,',','.') ?>,-</p>
                        <?php endif ?>
                        <a class="text-xs text-center justify-self-end rounded-sm bg-indigo-800 px-3 py-2 text-white transition-all hover:bg-indigo-600 active:bg-indigo-900"
                            href="<?= $product['link'].$product['id'] ?>" target="_blank">Pesan Sekarang</a>
                        <a class="text-xs text-center justify-self-end rounded-sm bg-indigo-800 px-3 py-2 text-white transition-all hover:bg-indigo-600 active:bg-indigo-900"
                            href="detail?id=<?=$product['id']?>" target="_blank">Lihat</a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <?php endif; endforeach ?>
        </section>
    </main>
    <script src="js/index.js"></script>
</body>

</html>