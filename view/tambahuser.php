<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>EDIT USER</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>
<body>
<div class="container">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">TAMBAH USER</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Form Tambah User</h3>
                                        </div>
                                        <hr>
                                <?php
                                //Include file koneksi, untuk koneksikan ke database
                                include "../koneksi.php";

                                //Fungsi untuk mencegah inputan karakter yang tidak sesuai
                                function input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                                //Cek apakah ada kiriman form dari method post
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                    $level=input($_POST["level"]);
                                    $nama=input($_POST["nama"]);
                                    $username=input($_POST["username"]);
                                    $password=input($_POST["password"]);

                                    //Query input menginput data kedalam tabel anggota
                                    $sql="insert into user (level,nama,username,password) values
                                    ('$level','$nama','$username','$password')";

                                    //Mengeksekusi/menjalankan query diatas
                                    $hasil=mysqli_query($kon,$sql);

                                    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
                                    if ($hasil) {
                                        $_SESSION['status'] = "<div class='alert alert-success'> User Berhasill Ditambahkan</div>";
                                        header("Location:../index.php?page=user");
                                    }
                                    else {
                                        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

                                    }
                                    mysqli_close($kon);  
                                }
                            ?>
							<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="">
                                <div class="form-group">
                                    <label >Level</label>
                                        <select name="level" id="select" class="form-control">
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" id="text-input" name="nama" placeholder="Text" class="form-control">
                                    <span class="help-block">Please enter your Name</span>
                                </div>
                                <div class="form-group">
                                    <label >Username</label>
                                    <input type="text" id="text-input" name="username" placeholder="Text" class="form-control">
                                    <span class="help-block">Please enter your username</span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="nf-password" name="password" placeholder="Enter Password.." class="form-control">
                                    <span class="help-block">Please enter your password</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </form>
                            </div>
                                </div>
                            </div>
</div>


    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
</body>
</html>