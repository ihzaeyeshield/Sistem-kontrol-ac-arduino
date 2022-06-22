
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                
                                                <th>Username</th>
                                                <th>IP</th>
                                                <th>Login Time</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                    include "koneksi.php";
                                                    $sql="select * from iplog order by id_log desc";

                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;

                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $data["username"];   ?></td>
                                                            <td><?php echo $data["ipaddress"]; ?></td>
                                                            <td><?php echo $data["waktu"];   ?></td>
                                                            
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