<?php 
require '../head.php';
$error = 'Password';?>

<body class="flex justify-center items-center">
    <?php
    if( isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        if (empty($username)){
            $error = "Username / Email tidak boleh kosong";
        } else if( mysqli_num_rows($result) === 1) {
            $session = mysqli_fetch_assoc($result);
            if(password_verify($password, $session["password"])){
                echo "<script>Swal.fire({
                        icon: 'success',
                        title: 'Selamat Datang $username',
                        showConfirmButton: false, 
                        timer: 1500,
                        }).then(() => {window.location = '$webUrl/admin.php';});</script>";
                        } else{ 
                            $error = "Username / Password salah";
                        }
                    }
                }
                ?>
    <div class="bg-white/20 backdrop-blur-md p-3 rounded-md">
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" class="input" placeholder="Username" name="username">
            <label for="pass">Password</label>
            <input type="password" id="pass" class="input" placeholder="<?=$error?>" name="password">
            <button type="submit" class="button" name="login">Login</button>
        </form>
    </div>
</body>