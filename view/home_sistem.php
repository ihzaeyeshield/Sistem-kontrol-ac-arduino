<?php 
$update_ruang = $_GET['lantai'];
$update_status = $_GET['status'];
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
    $status = (int)$data_array[$i]['status'];
    if ($update_ruang == $ruang) {
        # code...
        $to_save[] = ['lantai' => $ruang, 'status' => 
        (int) $update_status];
        if ((int)$update_status == 1) {
            # code...
            echo "menyalakan lampu".$ruang;
            echo header("location:../index.php");
        } else{
            echo "mematikan lampu".$ruang;
        }
    }else{
        $to_save[]=['lantai' => $ruang,'status' => $status];
    }
}
$end_update = json_encode($to_save, JSON_PRETTY_PRINT);
file_put_contents('data.json', $end_update);
?>