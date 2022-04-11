<?php
require 'config.php';
$noWA = '6285156609727';
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
    global $noWA;
    $nama = htmlspecialchars(mysqli_escape_string($conn,$produk["nama"]));
    $deskripsi =  htmlspecialchars(mysqli_escape_string($conn,$produk["deskripsi"]));
    $price =  htmlspecialchars(mysqli_escape_string($conn,$produk["price"]));
    $promo =  htmlspecialchars(mysqli_escape_string($conn,$produk["promo"]));
    $image = upload();
    if (!$image) {
        return false;
    }
    $kategori =  htmlspecialchars(mysqli_escape_string($conn,strtolower($produk["kategori"])));
    $link = "https://wa.me/$noWA?text=Halo+kak+Ayn%0D%0ASaya+tertarik+dengan+produk+berikut%0D%0A%0D%0A%2AHarga+%3A+Rp+". number_format($price,0,',','.')."%2C-%2A%0D%0A%0D%0Ahttps%3A%2F%2Fayn.huntstopup.com%2Fdetail.php%3Fid%3D";
    $query = "INSERT INTO `products` (`id`, `produk`, `price`, `promo`, `image`, `link`, `kategori`, `status`, `deskripsi`) VALUES (NULL, '$nama', $price, NULL, '$image', '$link', '$kategori', 'available', '$deskripsi')";
    if ($promo > 0){
        $link = "https://wa.me/$noWA?text=Halo%20kak%20Ayn%0D%0ASaya%20tertarik%20dengan%20produk%20berikut%0D%0A%0D%0AHarga%20%3A%20~Rp%20". number_format($price,0,',','.')."~%2C-%0D%0A%2AHarga%20Promo%20%3A%20Rp%20". number_format($promo,0,',','.')."%2C-%2A%0D%0A%0D%0Ahttps%3A%2F%2Fayn.huntstopup.com%2Fdetail.php%3Fid%3D";
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

function tambahKategori($kategori) {
    global $conn;
    $kategori = htmlspecialchars(mysqli_escape_string($conn,strtolower($kategori["kategori"])));
    $query = "INSERT INTO `kategori` (`id`, `list`) VALUES (NULL, '$kategori')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query( $conn, "DELETE FROM products WHERE id = $id");

    return mysqli_affected_rows($conn);
}