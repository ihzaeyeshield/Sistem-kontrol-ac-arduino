<?php session_start(); ?>
<?php

                                                include "../koneksi.php";

                                                //Cek apakah ada kiriman form dari method post
                                                if (isset($_GET['id_user'])) {
                                                    $id_user=htmlspecialchars($_GET["id_user"]);

                                                    $sql="delete from user where id_user='$id_user' ";
                                                    $hasil=mysqli_query($kon,$sql);

                                                    //Kondisi apakah berhasil atau tidak
                                                        if ($hasil) {
                                                            $_SESSION['status'] = "<div class='alert alert-danger'> Data Berhasil Dihapus.</div>";
                                                            header("Location:../index.php?page=user");
                                                        }
                                                        else {
                                                            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

                                                        }
                                                    }
                                            ?>