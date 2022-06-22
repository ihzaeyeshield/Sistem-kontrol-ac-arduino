<div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Komentar</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    include "koneksi.php";
                                                    $sql="select * from komentar order by id_komentar desc";

                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;

                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $data["username"]; ?></td>
                                                            <td><?php echo $data["komen"]; ?></td>
                                                        </tr>
                                                        
                                                        <?php
                                                    }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>