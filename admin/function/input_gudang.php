<?php
	include("../../koneksi.php");
	$id_gudang = $_POST["id_gudang"];
	$nama_gudang = $_POST["nama_gudang"];

	$sql= "INSERT INTO gudang VALUES ('$id_gudang','$nama_gudang')";
	$query = mysqli_query($conn,$sql);

	if ($query) {
		echo "<script>alert('insert berhasil')</script>";
    	echo "<script>location.href='../index.php'</script>";
    }else {
    	echo "<script>alert('insert gagal')</script>";
    	echo "<script>location.href='../index.php'</script>";
}
?>