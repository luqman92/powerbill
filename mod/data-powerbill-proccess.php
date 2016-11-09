<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$IdNasabah = $_POST['IdNasabah'];
	$IdProv = $_POST['IdProv'];
	$NoPelanggan = $_POST['NoPelanggan'];
	$IdAgent = $_POST['IdAgent'];
	
	$sql = "INSERT INTO trxpowerbill SET IdNasabah='$IdNasabah',IdProv='$IdProv',NoPelanggan='$NoPelanggan',IdAgent='$IdAgent', TglTrx=now()";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=data-powerbill";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdTrx = $_POST['IdTrx'];
	$IdNasabah = $_POST['IdNasabah'];
	$IdProv = $_POST['IdProv'];
	$NoPelanggan = $_POST['NoPelanggan'];
	$IdAgent = $_POST['IdAgent'];
	
	$sql = "UPDATE trxpowerbill SET IdNasabah='$IdNasabah',IdProv='$IdProv',NoPelanggan='$NoPelanggan',IdAgent='$IdAgent' WHERE IdTrx='$IdTrx'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=data-powerbill";
			</script>
		<?php
	}
}elseif ($act=='del') {
	$sql = "DELETE FROM trxpowerbill WHERE IdTrx='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=data-powerbill";
			</script>
		<?php
	}
}
?>