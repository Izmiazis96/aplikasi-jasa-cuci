<?php
session_start();
if( empty( $_SESSION['id_user'] ) ){
	//session_destroy();
	$_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
	header('Location: ./');
	die();
} else {
	include "koneksi.php";

}

$id_biaya = $_POST['id_biaya'];
$sql = mysqli_query($koneksi, "SELECT * FROM biaya WHERE id_biaya = '$id_biaya'");
$data = mysqli_fetch_row($sql);

echo json_encode($data);

?>

