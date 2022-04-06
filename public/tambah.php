<?php require 'head.php';
    if(isset($_POST['tambah'])){
        if (tambahProduk(($_POST)>0)){
            echo `<script>alert('yeay')`;
        }
    }


?>



<body class="bg-blue-200">
    <?php require 'header-admin.php'?>
    <main class="mx-5 lg:pl-64">
        <section class="mt-1 mb-3 min-h-screen pt-16" id="2">
            <h1 class="my-3 text-2xl font-semibold">Tambah Produk</h1>
            <div class=" bg-slate-300 flex flex-wrap lg:flex-nowrap gap-3 mx-auto p-3 items-center min-h-max h-5/6">
                <form action="" method="post" class="flex flex-col w-full lg:w-2/3 justify-around gap-3 h-full"
                    name="tambah">
                    <label for="nama">Nama Produk
                        <textarea type="text" id="nama" class="resize-none bg-slate-900" name="produk"></textarea>
                    </label>
                    <label for="deskripsi">Deskripsi Produk
                        <input type="text" id="deskripsi" name="deskripsi">
                    </label>
                    <label for="kategori">Kategori
                        <input type="text" id="kategori" name="kategori">
                    </label>
                    <label for="price">Harga
                        <input type="text" id="price" name="price">
                    </label>
                    <label for="promo">Harga Promo
                        <input type="text" id="promo" name="promo">
                    </label>
                    <label for="gambar">Gambar
                        <input type="text" id="gambar" name="gambar">
                    </label>
                    <button type="submit" name="tambah">Tambah</button>
                </form>
                <img src="assets/img/produk.jpeg" alt="" srcset=""
                    class="p-3 rounded-sm border-2 border-indigo-700 w-80">
            </div>
        </section>
    </main>
    <?php require 'footer-admin.php' ?>
    <script>
    document.title = 'Tambah Produk'
    </script>
</body>

</html>