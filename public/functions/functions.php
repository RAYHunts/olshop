<?php
require 'config.php';
$conn = mysqli_connect($host,$username,$pass, $database);

function query( $query) {
    global $conn;
    $result = mysqli_query( $conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc( $result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahProduk($produk) {
    global $conn;
    $nama = htmlspecialchars(mysqli_escape_string($conn,$produk["nama"]));
    $deskripsi =  htmlspecialchars(mysqli_escape_string($conn,$produk["deskripsi"]));
    $price =  htmlspecialchars(mysqli_escape_string($conn,$produk["price"]));
    $promo =  htmlspecialchars(mysqli_escape_string($conn,$produk["promo"]));
    $image = upload();
    if (!$image) {
        return false;
    }
    $kategori =  htmlspecialchars(mysqli_escape_string($conn,strtolower($produk["kategori"])));
    $link = "https://wa.me/6285156609727?text=Halo%20kak%20Ayn%0ASaya%20tertarik%20dengan%20produk%20berikut%0A%0ANama%20%3A%20$nama%0A%2AHarga%20Promo%20%3A%20Rp%20$promo%2C-%2A%0A";
    $query = "INSERT INTO `products` (`id`, `produk`, `price`, `promo`, `image`, `link`, `kategori`, `status`, `deskripsi`) VALUES (NULL, '$nama', $price, NULL, '$image', '$link', '$kategori', 'available', '$deskripsi')";
    if ($promo > 0){
        $link = "https://wa.me/6285156609727?text=Halo%20kak%20Ayn%0ASaya%20tertarik%20dengan%20produk%20berikut%0A%0ANama%20%3A%20$nama%0AHarga%20%3A%20~Rp%20$price~%2C-%0A%2AHarga%20Promo%20%3A%20Rp%20$promo%2C-%2A%0A";
        $query = "INSERT INTO `products` (`id`, `produk`, `price`, `promo`, `image`, `link`, `kategori`, `status`, `deskripsi`) VALUES (NULL, '$nama', $price, $promo, '$image', '$link', '$kategori', 'available', '$deskripsi')";
    }
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4 ) {
        echo "
                <script>
                alert('silahkan upload gambar');
                </script>";
        return false;
        
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('format gambar tidak didukung');
        </script>";
        return false;
    }

    //limit file size
    if( $ukuranFile > 2000000){
        echo "<script>
        alert('ukuran gambar tidak boleh melebihi 2MB');
        </script>";
        return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/img/produk/' . $namaFileBaru);
    return $namaFileBaru;
    
}