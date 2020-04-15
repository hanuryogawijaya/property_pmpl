<?php
	include("../../koneksi.php");
	$id_bb = $_POST["id_bb"];
	$nama_bb = $_POST["nama_bb"];
	$harga = $id_bb = $_POST["harga"];

	$sql= "INSERT INTO bahanbaku VALUES ('$id_bb','$nama_bb','$harga')";
	$query = mysqli_query($conn,$sql);

	if ($query) {
		echo "<script>alert('insert berhasil')</script>";
    	echo "<script>location.href='../index.php'</script>";
    }else {
    	echo "<script>alert('insert gagal')</script>";
    	echo "<script>location.href='../index.php'</script>";
}
?>