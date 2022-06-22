<?php 


session_start();
include 'koneksi.php';

require_once('config/koneksi.php');
require_once('models/database.php');

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$update_ruang = $_GET['lantai'];
$update_status = $_GET['status'];
$update_status_sensor = $_GET['statussensor'];
$from_wemos = $_GET['wemos'];
$from_android = $_GET['android'];
if($from_android != null){
    $data1 = file_get_contents('data.json');
    echo $data1;
}
if($update_ruang == null && $update_status == null && $from_wemos != null){

    $data1 = file_get_contents('data.json');
    $data1 = json_decode($data1, true);
    for ($i=0; $i < count($data1) ; $i++) { 
        $ruang = $data1[$i]['lantai'];
        $status = $data1[$i]['status'];
        $for_get_arduino[] = [$ruang => $status];
    }
    $for_get_arduino = json_encode($for_get_arduino);
    $for_get_arduino = str_replace('},{', ',',
        $for_get_arduino);
    $for_get_arduino = str_replace(['[',']'], '',
        $for_get_arduino);
    echo $for_get_arduino;
    die();
}
$data1 = file_get_contents('data.json');
$data_array = json_decode($data1, true);
for ($i=0; $i <count($data_array); $i++) { 
    # code...
    $ruang = $data_array[$i]['lantai'];
    $alat = $data_array[$i]['alat'];
    $status = (int)$data_array[$i]['status'];
    $statussensor = $data_array[$i]['statussensor'];
    if ($update_ruang == $ruang) {
        # code...
        $to_save[] = ['lantai' => $ruang, 'status' => 
        (int) $update_status, 'alat' => $alat, 'statussensor' => $update_status_sensor];

        if ((int)$update_status == 1) {
            # code...
            
            echo "menyalakan lampu".$ruang;
        } else{
           
            echo "mematikan lampu".$ruang;
        }
    }else{
        $to_save[]=['lantai' => $ruang,'status' => $status, 'alat' => $alat, 'statussensor' => $statussensor];
    }
}
$end_update = json_encode($to_save, JSON_PRETTY_PRINT);
file_put_contents('data.json', $end_update);

if ($_SESSION['level']=="user") {
    header("location:indexuser.php?sistemkontrol");
}else {
    header("location:index.php?sistemkontrol");
}

?>

