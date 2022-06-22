<a href="view/tambahuser.php"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smallmodal1">
                                            <i class="fa fa-plus-square"></i>&nbsp; Tambah User</button></a>
                        <div class="row m-t-30">
                        <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="berhasil"){
                                    echo "<div class='alert alert-success'> SELAMAT DATANG </div>";
                                }
                            }
                        ?>
                        
                            <div class="col-md-12">
                            <?php echo $_SESSION['status']="" ?>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Level</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>   <?php
                                                    include "koneksi.php";
                                                    $sql="select * from user order by id_user desc";

                                                    $hasil=mysqli_query($kon,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;

                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $data["level"];   ?></td>
                                                            <td><?php echo $data["nama"]; ?></td>
                                                            <td><?php echo $data["username"];   ?></td>
                                                            <td><?php echo $data["password"];   ?></td>
                                                            
                                                            <td >
                                                            <a href="view/update.php?id_user=<?php echo htmlspecialchars($data['id_user']); ?>"> <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#smallmodal" >
                                                            <i class="fa fa-map-marker"></i>&nbsp; EDIT</button> </a>
                                                                                                
                                                            <a href="view/delete.php?id_user=<?php echo $data['id_user']; ?>"><button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#staticModal">
                                                            <i class="fa fa-rss"></i>&nbsp;DELETE</button> </a>
                                                            
                                                            </td>
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