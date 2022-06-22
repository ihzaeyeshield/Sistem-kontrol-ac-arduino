<?php

$konek = mysqli_connect("localhost", "root", "", "sistemkontrol");

$nilai = $_GET["sensor"];
$nilai2 = $_GET["sensor2"];


mysqli_query($konek,"update sensor set nilai_sensor1='$nilai', nilai_sensor2='$nilai2'");
?>