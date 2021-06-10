<?php
/*
Nama      : Ikhsan Rachmat Alghifari
Npm/Nrp   : 203040042
Shift     : 10.00 - 11.00 Jum'at
https://github.com/IkhsanRachmat/pw2021_203040042
*/
session_start();
require 'functions.php';
//melakukan pengecekan login jika sudah maka redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
//Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" 
    media="screen,projection"/>

    <!-- Style Internal Css untuk halaman login-->

    <style>
        html,
        body {
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
        }
    </style>    
  </head>

<body class="cyan">    
        <!-- Form Section -->
    <form action="" method="post">
        <div class="card-panel z-depth-5">
            <div class="row margin">
                <div class="col s12 m12 l12 center">
                    <img src="../assets/img/logowarma.png"alt="" class="responsive-img circle" style="width:200px;">
                    <p>Sign in WARMA</p>
                    <?php if (isset($error)) : ?>
                        <p style="color: red;font-style:italic;">Username na atau password na, anu salah</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Form Username Input Section -->

            <div class="col s12 m12 l12">
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="username" id="username">
                    <label for="username">Username na</label>
                </div>
            </div>

            <!-- Form Password Input Section -->

            <div class="col m12 l12">
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="password">
                    <label for="password">Password na</label>
                </div>
            </div>

                <!-- Form Chekbox (Remember Me) Input Section -->

            <div class="left">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">Remember Me</label>
            </div>
            <br><br>

                <!-- Form Button Section  -->

            <div class="center">
                <input type="submit" value="Login" name="submit" 
                class="btn waves-effect waves-light " 
                style="width:100%; background-color: #36a5b2;">
            </div>
        </div>
    </form>

    <!--Materialize js internal script-->
    <script type="text/javascript" 
    src="https://code.jquery.com/jquery-2.1.1.min.js">
    </script>
    <script type="text/javascript" 
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>
    
</body>
</html>