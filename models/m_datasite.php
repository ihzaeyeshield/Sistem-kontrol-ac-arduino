<?php
class m_datasite{

private $mysqli;

function __construct($conn){
  $this->mysqli = $conn;
}

public function tampil_user($id= null){
  $db = $this->mysqli->conn;
  $sql = "SELECT * FROM user ";
  if ($id != null) {
    // code...
    $sql .= " WHERE id = $id";
  }
  $query  = $db->query($sql) or die ($db->error);
  return $query;
}

public function tampil_tgl($tgl1, $tgl2){
  $db = $this->mysqli->conn;
  $sql = "SELECT * FROM site WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'";
  $query  = $db->query($sql) or die ($db->error);
  return $query;
}

public function simpan($kode_site, $nama_site, $kota_site, $alamat_site,$data_zip)
{

  // code...
   $db = $this->mysqli->conn;
   $db->query("INSERT INTO site VALUES ('$kode_site','$nama_site', '$kota_site', '$alamat_site','$data_zip', now()) ") or die (mysqli_error());
}
public function simpan2($kode_site, $nama_site, $kota_site, $alamat_site,$data_zip)
{

  // code...
   $db = $this->mysqli->conn;
   $db->query("INSERT INTO user VALUES ('$kode_site','$nama_site', '$kota_site', '$alamat_site','$data_zip', now()) ") or die (mysqli_error());
}

public function simpanstatus($isistatus,$id)
{

  // code...
   $db = $this->mysqli->conn;
   $db->query("UPDATE `site` SET `status` = $isistatus WHERE `site`.`id_site` = $id") or die (mysqli_error());
}

public function hapus($id)
{
  // code...
  $db = $this->mysqli->conn;
  $db->query("DELETE FROM site WHERE id_site='$id'") or die (mysqli_error());
}
function __destruct(){
  $db = $this->mysqli->conn;
  $db->close();
}
public function edit($sql){
  $db = $this->mysqli->conn;
  $db->query($sql)or die ($db->error);
}
}
 ?>
