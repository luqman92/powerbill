<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$LimitP = $_POST['LimitP'];
	
	$sql = "INSERT INTO limitp SET LimitP='$LimitP'";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=limit";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdLimit = $_POST['IdLimit'];
	$LimitP = $_POST['LimitP'];
	
	$sql = "UPDATE limitp SET LimitP='$LimitP' WHERE IdLimit='$IdLimit'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=limit";
			</script>
		<?php
	}
}elseif ($act=='del') {
	$sql = "DELETE FROM limitp WHERE IdLimit='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=limit";
			</script>
		<?php
	}
}
?>