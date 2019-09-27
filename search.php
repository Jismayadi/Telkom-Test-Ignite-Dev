<?php
$keyword = $_POST['keyword'];
$keyword2 = $_POST['keyword2'];

// Load view.php
ob_start();
include "view.php";
$html = ob_get_contents(); // Masukan isi dari view.php ke dalam variabel $html
ob_end_clean();


echo json_encode(array('hasil'=>$html));
?>
