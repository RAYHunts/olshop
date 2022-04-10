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
                <div class="lg:w-1/2">
                    <form action="" method="post" name="tambah" enctype="multipart/form-data">
                        <label class="w-full" for="nama">Nama Produk</label>
                        <input required type="text" id="nama" name="nama" class="input">
                        <label class="w-full" for="deskripsi">Deskripsi</label>
                        <textarea type="text" id="deskripsi" required class="h-24 input resize-none"
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
                        <button class="button" type="button"><label class="cursor-pointer" for="gambar">Tambah Gambar <i
                                    class="fa-duotone fa-image fa-lg"></i></label></button>
                        <input required type="file" id="gambar" name="gambar" class="hidden"
                            onchange="displayImage(this)">
                        <button type="submit" name="tambah" class="button float-right">Tambah Produk</button>
                    </form>
                </div>
                <div class="p-3 overflow-clip lg:w-1/2">
                    <img src="assets/img/noimage.jpg" alt="" srcset="" class="w-full  rounded-lg" id="imageDisplay">
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