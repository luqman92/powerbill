<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$KdProv = $_POST['KdProv'];
	$JenisProvider = $_POST['JenisProvider'];
	$NamaProvider = $_POST['NamaProvider'];

	$sql = "INSERT INTO provider SET KdProv='$KdProv', JenisProvider='$JenisProvider',NamaProvider='$NamaProvider'";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=provider";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdProv = $_POST['IdProv'];
	$KdProv = $_POST['KdProv'];
	$JenisProvider = $_POST['JenisProvider'];
	$NamaProvider = $_POST['NamaProvider'];


	$sql = "UPDATE provider SET KdProv='$KdProv',JenisProvider='$JenisProvider',NamaProvider='$NamaProvider' WHERE IdProv='$IdProv'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=provider";
			</script>
		<?php
	}
}elseif ($act=='del') {
	$sql = "DELETE FROM provider WHERE IdProv='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=provider";
			</script>
		<?php
	}
}
?>