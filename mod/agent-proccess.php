<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$KdAgent = $_POST['KdAgent'];
	$Agent = $_POST['Agent'];
	$NamaAsli = $_POST['NamaAsli'];

	$sql = "INSERT INTO agent SET KdAgent='$KdAgent', Agent='$Agent',NamaAsli='$NamaAsli'";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=agent";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdAgent = $_POST['IdAgent'];
	$KdAgent = $_POST['KdAgent'];
	$Agent = $_POST['Agent'];
	$NamaAsli = $_POST['NamaAsli'];


	$sql = "UPDATE agent SET KdAgent='$KdAgent',Agent='$Agent',NamaAsli='$NamaAsli' WHERE IdAgent='$IdAgent'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=agent";
			</script>
		<?php
	}
}elseif ($act=='del') {
	$sql = "DELETE FROM agent WHERE IdAgent='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=agent";
			</script>
		<?php
	}
}
?>