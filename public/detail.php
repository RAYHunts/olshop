<?php require 'functions/functions.php';
$id = $_GET['id'];
$produk = query( "SELECT * FROM products WHERE id = $id")[0];
?>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Primary Meta Tags -->
    <title><?= $produk['produk'] ?></title>
    <meta name="title" content="<?= $produk['produk'] ?>">
    <meta name="description" content="<?=$produk['deskripsi']?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?=$produk['produk']?>">
    <meta property="og:url" content="<?= $_SERVER['PHP_SELF'];?>">
    <meta property="og:title" content="<?= $produk['produk'] ?>">
    <meta property="og:description"
        content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
    <meta property="og:image" content="<?=$webUrl?>assets/img/produk<?=$produk['image']?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?=$webUrl?>">
    <meta property="twitter:title" content="<?= $produk['produk'] ?>">
    <meta property="twitter:description"
        content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
    <meta property="twitter:image" content="<?=$webUrl?>assets/img/produk<?=$produk['image']?>">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@18657a9/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?=$webUrl?>css/style.css" />
    <title>Document</title>
</head>



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
        <section class="py-2 px-5 lg:px-40 pt-20 flex flex-col lg:flex-row gap-3">
            <div class="w-full lg:w-1/2 overflow-clip rounded-md">
                <img src="assets/img/produk/<?=$produk['image']?>" alt="" class="w-full">
            </div>
            <div class="flex flex-col gap-2 lg:w-1/2 p-3">
                <div class="price-tag">
                    <?php if($produk['promo'] != 0) : ?>
                    <p class="text-2xl font-bold">Rp
                        <?= number_format($produk['promo'],0,',','.') ?>,-</p>
                    <p><span
                            class="mr-2 h-1 w-2 rounded-sm bg-red-200 p-1 text-xs font-bold text-red-900 no-underline"><?= floor((($produk['price']-$produk['promo'])/$produk['price'])*100) ?>%</span><span
                            class="text-xs line-through">Rp
                            <?= number_format($produk['price'],0,',','.') ?></span>,-
                    </p>
                    <?php else :?>
                    <p class="text-2xl font-bold">Rp
                        <?= number_format($produk['price'],0,',','.') ?>,-</p>
                    <?php endif ?>
                </div>
                <h1 class="text-xl font-bold lg:order-first"><?=$produk['produk']?></h1>
                <hr>
                <div>
                    <p class="line-clamp-6 leading-relaxed mb-2" id="deskripsi"><?=$produk['deskripsi'] ?>
                    </p>
                    <button class="button" id="readmore">Read More</button>
                    <button class="button">
                        <a href="<?=$produk['link'] ?>" target="_blank">Pesan Sekarang</a>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <script src="js/index.js"></script>
</body>

</html>