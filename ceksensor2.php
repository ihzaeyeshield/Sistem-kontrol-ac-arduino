<?php
    $konek = mysqli_connect("localhost", "root", "", "sistemkontrol");

    $sql = mysqli_query($konek, "select * from sensor");
    $data = mysqli_fetch_array($sql);
    $nilai = $data["nilai_sensor2"];

    echo $nilai;
?>