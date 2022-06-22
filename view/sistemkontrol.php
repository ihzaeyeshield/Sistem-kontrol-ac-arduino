<!-- USER DATA-->
<script src="jquery/jquery.min.js"></script>

<?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="berhasil"){
                                    echo "<div class='alert alert-success'> SELAMAT DATANG </div>";
                                }
                            }
                        ?>
                        <div class="user-data m-b-30">
                                <h3 class="title-3 m-b-30">
                                    <i class="fa fa-floppy-o"></i>SISTEM KONTROL </h3>
                                
                                <div class="table-responsive m-b-40">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>Ruangan</td>
                                                <td>Alat</td>
                                                <td>I/O</td>
                                                <td>Status</td>
                                                <td>nilai sensor</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <span id="ceksensor">long</span>
                                            <?php
                                            $i = 0;
                                            $data1=json_decode(file_get_contents("data.json"),true);
                                            foreach($data1 as $v){
                                                
                                            echo    '
                                            <tr>
                                                <td>
                                                <label class="au-checkbox">
                                                </label>
                                                </td>

                                                <td>
                                                    <div class="table-data__info">
                                                        '.$v["lantai"].'
                                                    </div>
                                                </td>

                                                <td>
                                                    <span class="role admin">'.$v["alat"].'</span><br>
                                                </td>
                                                
                                                <td>
                                                    <label class="switch switch-3d switch-danger mr-3">
                                                        <input type="checkbox" onclick="fungsi'.$i++.'()" id="'.$v["lantai"].'" class="switch-input" '.($v["status"]?"checked":"").' data-toggle="toggle" >
                                                        <span class="switch-label"></span>
                                                        <span class="switch-handle"></span>
                                                      </label>
                                                </td>

                                                <td>
                                                    <div class="table-data__status">
                                                        <h6">'.$v["statussensor"].'</h6>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="table-data__nilaisensor">
                                                        <h6><span id="ceksensor'.$i++.'"></span></h6>
                                                    </div>
                                                </td>

                                            </tr>
                                            ';
                                            
                                            echo $i++;
                                            }

                                            ?>

                                            <script>
                                                $(document).ready(function(){
                                                    setInterval(function() {
                                                        $("#ceksensor1").load('ceksensor1.php');
                                                    },1000);
                                                });

                                                $(document).ready(function(){
                                                    setInterval(function() {
                                                        $("#ceksensor4").load('ceksensor2.php');
                                                    },1000);
                                                });
                                            </script>

                                              <script>
                                              function fungsi0()
                                            {
                                            if (document.getElementById("Lantai_1_Lamp").checked != true)
                                                {window.location.href="home_sistem.php?lantai=Lantai_1_Lamp&status=0&statussensor=Mati";}
                                            else if (document.getElementById("Lantai_1_Lamp").checked == true){
                                                window.location.href="home_sistem.php?lantai=Lantai_1_Lamp&status=1&statussensor=Menyala";} 
                                            }
                                             
                                            function fungsi3()
                                            {
                                            if (document.getElementById("Lantai_1_AC").checked != true)
                                                {window.location.href="home_sistem.php?lantai=Lantai_1_AC&status=0&statussensor=Mati";}
                                            else if (document.getElementById("Lantai_1_AC").checked == true){
                                                window.location.href="home_sistem.php?lantai=Lantai_1_AC&status=1&statussensor=Menyala";} 
                                            }

                                            function fungsi6()
                                            {
                                            if (document.getElementById("Lantai_2_Lamp").checked != true)
                                                {window.location.href="home_sistem.php?lantai=Lantai_2_Lamp&status=0&statussensor=Mati";}
                                            else if (document.getElementById("Lantai_2_Lamp").checked == true){
                                                window.location.href="home_sistem.php?lantai=Lantai_2_Lamp&status=1&statussensor=Menyala";} 
                                            }

                                            function fungsi6()
                                            {
                                            if (document.getElementById("Lantai_2_AC").checked != true)
                                                {window.location.href="home_sistem.php?lantai=Lantai_2_AC&status=0&statussensor=Mati";}
                                            else if (document.getElementById("Lantai_2_AC").checked == true){
                                                window.location.href="home_sistem.php?lantai=Lantai_2_AC&status=1&statussensor=Menyala";} 
                                            }
                                            
                                            </script>

                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            <!-- END USER DATA-->