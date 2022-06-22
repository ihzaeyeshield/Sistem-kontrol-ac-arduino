<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Form Komentar</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">TULIS KOMENTAR DISINI</h3>
                                        </div>
                                        <hr>
                                        <?php
                                //Include file koneksi, untuk koneksikan ke database
                                include "koneksi.php";

                                //Fungsi untuk mencegah inputan karakter yang tidak sesuai
                                function input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                                //Cek apakah ada kiriman form dari method post
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $username=$_SESSION['username'];
                                    $komen=input($_POST["komen"]);

                                    //Query input menginput data kedalam tabel anggota
                                    $sql="insert into komentar (username,komen) values
                                    ('$username','$komen')";

                                    //Mengeksekusi/menjalankan query diatas
                                    $hasil=mysqli_query($kon,$sql);

                                    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
                                    if ($hasil) {
                                        echo "<div class='alert alert-success'> Data Berhasil disimpan.</div>";
                                    }
                                    else {
                                        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

                                    }
                                    mysqli_close($kon);  
                                }
                            ?>

							<form action="indexuser.php?page=komenuser" method="post" class="">
                                <div class="form-group">
                                    <textarea name="komen" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </form>
                                    </div>
                                </div>
                            </div>