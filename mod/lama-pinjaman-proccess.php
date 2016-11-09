<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$Lama = $_POST['Lama'];
	
	$sql = "INSERT INTO lama SET Lama='$Lama'";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=lama-pinjaman";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdLama = $_POST['IdLama'];
	$Lama = $_POST['Lama'];
	
	$sql = "UPDATE lama SET Lama='$Lama' WHERE IdLama='$IdLama'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=lama-pinjaman";
			</script>
		<?php
	}
}elseif ($act=='del') {
	$sql = "DELETE FROM lama WHERE IdLama='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=lama-pinjaman";
			</script>
		<?php
	}
}
?>