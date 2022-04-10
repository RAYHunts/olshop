<?php   
require 'head.php';
$lists = query( "SELECT * FROM kategori");
?>

<body class="bg-blue-200">
    <?php require 'header-admin.php';
    if(isset($_POST['tambah-kategori'])){ 
        $tambah = $_POST['kategori'];
        if (tambahKategori($_POST) > 0){
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: '$tambah berhasil ditambahkan',
            showConfirmButton: false, 
            timer: 1500,
            })
        </script>";
        
    } else {
        echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: '$tambah gagal ditambahkan',
            showConfirmButton: false, 
            timer: 1500,
            })
        </script>"
        ;
    }
}
?>
    <main class="mx-5 lg:pl-64">
        <section class="mt-1 mb-3 min-h-screen pt-16" id="2">
            <h1 class="my-3 text-2xl font-semibold">Tambah Produk</h1>
            <div class="flex flex-wrap lg:flex-nowrap gap-3 mx-auto p-3 h-auto bg-slate-200 items-center">
                <form action="" method="post" class="w-full lg:w-1/2">
                    <label for="kategori">Tambah Kategori</label>
                    <input type="text" id="kategori" class="input" name="kategori">
                    <button type="submit" class="button" name="tambah-kategori">Tambah <i
                            class="fa-duotone fa-circle-plus"></i></button>
                </form>
                <div class="flex flex-col w-full lg:w-2/3 p-3 ">
                    <h1>Daftar Kategori</h1>
                    <ul class="list-disc list-outside pl-3">
                        <?php foreach($lists as $kategori) :?>
                        <li class="capitalize">
                            <?=$kategori['list'] ?>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>

            </div>
        </section>
    </main>
    <?php require 'footer-admin.php' ?>
    <script>
    document.title = 'Tambah'
    </script>
</body>

</html>