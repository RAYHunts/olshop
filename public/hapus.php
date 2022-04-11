<?php 
require 'head.php';
$id = $_GET["id"];


if (hapus($id) > 0 ){
        echo "
        <script>
        Swal.fire({
                icon: 'success',
                title: 'Produk berhasil dihaous',
                showConfirmButton: false, 
                timer: 1500,
                }).then(() => {window.location = 'admin';});
                </script>
            ";
    } else {
        echo "
                <script>
                Swal.fire({
                        icon: 'error',
                        title: 'Produk gagal dihapus',
                        showConfirmButton: false, 
                        timer: 1500,
                        }).then(() => {window.location = 'admin';});
                </script>
        ";
    }