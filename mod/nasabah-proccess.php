<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$NoKartuCc = $_POST['NoKartuCc'];
	$Nama = $_POST['Nama'];
	$TmptLahir = $_POST['TmptLahir'];
	$TglLahir = $_POST['TglLahir'];
	$Alamat = $_POST['Alamat'];
	$Ktp = $_POST['Ktp'];
	$Telpon = $_POST['Telpon'];
	$Email = $_POST['Email'];
	$IbuKandung = $_POST['IbuKandung'];
	
	$sql = "INSERT INTO nasabah SET NoKartuCc='$NoKartuCc',Nama='$Nama',TmptLahir='$TmptLahir',TglLahir='$TglLahir',Alamat='$Alamat',Ktp='$Ktp',Telpon='$Telpon',Email='$Email',IbuKandung='$IbuKandung'";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=data-nasabah";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdNasabah = $_POST['IdNasabah'];
	$NoKartuCc = $_POST['NoKartuCc'];
	$Nama = $_POST['Nama'];
	$TmptLahir = $_POST['TmptLahir'];
	$TglLahir = $_POST['TglLahir'];
	$Alamat = $_POST['Alamat'];
	$Ktp = $_POST['Ktp'];
	$Telpon = $_POST['Telpon'];
	$Email = $_POST['Email'];
	$IbuKandung = $_POST['IbuKandung'];
	
	$sql = "UPDATE nasabah SET NoKartuCc='$NoKartuCc',Nama='$Nama',TmptLahir='$TmptLahir',TglLahir='$TglLahir',Alamat='$Alamat',Ktp='$Ktp',Telpon='$Telpon',Email='$Email',IbuKandung='$IbuKandung' WHERE IdNasabah='$IdNasabah'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=data-nasabah";
			</script>
		<?php
	}
}elseif ($act=='del') {
	$sql = "DELETE FROM nasabah WHERE IdNasabah='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=data-nasabah";
			</script>
		<?php
	}
}
?>