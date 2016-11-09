<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$Target = $_POST['Target'];
	$Insentif = $_POST['Insentif'];
	
	$sql = "INSERT INTO targetinsentif SET Target='$Target',Insentif='$Insentif',Program='powerchase'";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=target-powerchase";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdTarget = $_POST['IdTarget'];
	$Target = $_POST['Target'];
	$Insentif = $_POST['Insentif'];
	
	$sql = "UPDATE targetinsentif SET Target='$Target',Insentif='$Insentif' WHERE IdTarget='$IdTarget'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=target-powerchase";
			</script>
		<?php
	}
}elseif ($act=='del') {
	$sql = "DELETE FROM targetinsentif WHERE IdTarget='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=target-powerchase";
			</script>
		<?php
	}
}
?>