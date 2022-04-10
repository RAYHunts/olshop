<?php require 'head.php';
$lists = query( "SELECT * FROM kategori");
?>



<body class="bg-blue-200">
    <?php require 'header-admin.php';
    if(isset($_POST['tambah'])){ 
        $produk = $_POST['nama'];
        if (tambahProduk($_POST) > 0){
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: '$produk berhasil ditambahkan',
            showConfirmButton: false, 
            timer: 1500,
            })
        </script>";
        
    } else {
        echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: '$produk gagal ditambahkan',
            showConfirmButton: false, 
            timer: 1500,
            })
        </script>"
        ;
    }
}?>
    <main class="mx-5 lg:pl-64">
        <section class="mt-1 mb-3 min-h-screen pt-16" id="2">
            <h1 class="my-3 text-2xl font-semibold">Tambah Produk</h1>
            <div
                class=" bg-white/20 backdrop-blur-sm flex flex-wrap lg:flex-nowrap gap-3 mx-auto p-3 items-center rounded-lg">
                <div class="md:w-1/2">
                    <form action="" method="post" name="tambah" enctype="multipart/form-data">
                        <label class="w-full" for="nama">Nama Produk</label>
                        <input required type="text" id="nama" name="nama" class="input">
                        <label class="w-full" for="deskripsi">Deskripsi</label>
                        <textarea type="text" id="deskripsi" required
                            class="w-full h-24 rounded-tr-2xl my-3 leading-relaxed bg-white/20 dark:bg-black/20 focus:outline-none focus:ring-2 focus:ring-blue-700 dark:focus:ring-indigo-800 dark:caret-blue-200 caret-indigo-800 resize-none"
                            name="deskripsi"></textarea>
                        <label class="w-full" for="kategori">Kategori
                        </label>
                        <select type="text" id="kategori" name="kategori" class="input" required>
                            <option disabled selected>Pilih Kategori</option>
                            <?php foreach($lists as $kategori) : ?>
                            <option class="input">
                                <?= ucfirst($kategori['list']) ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                        <label class="w-full" for="price">Harga</label>
                        <input required type="number" id="price" name="price" class="input">
                        <label class="w-full" for="promo">Harga Promo</label>
                        <input required type="number" id="promo" name="promo" class="input">
                        <label class="w-1/2" for="gambar">Gambar</label>
                        <input required type="file" id="gambar" name="gambar" class="input w-1/2">
                        <button type="submit" name="tambah" class="button mt-2 block">Tambah</button>
                    </form>
                </div>
                <div class="p-3 overflow-clip">
                    <img src="assets/img/produk.jpeg" alt="" srcset="" class="w-full  rounded-lg">
                </div>
            </div>
        </section>
    </main>
    <?php require 'footer-admin.php' ?>
    <script>
    document.title = 'Tambah Produk'
    </script>
</body>

</html>