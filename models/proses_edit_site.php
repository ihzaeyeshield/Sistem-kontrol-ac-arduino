<?php
require_once('../config/koneksi.php');
require_once('../models/database.php');
include "../models/m_datasite.php";
$connection = new Database($host, $user, $pass, $database);
$site = new datasite($connection);
 ?>
