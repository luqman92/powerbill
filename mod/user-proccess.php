<?php
include_once "config/koneksi.php";

$act = @$_GET['act'];

if ($act=='add') {

	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$sql = "INSERT INTO user SET Username='$Username', Password='$Password'";
	$qry = mysql_query($sql);

	if($qry){
		?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location="admin.php?mod=user";
			</script>
		<?php
	}
}elseif ($act=='update'){

	$IdUser = $_POST['IdUser'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	if(empty($Password)){
		$sql = "UPDATE user SET Username='$Username' WHERE IdUser='$IdUser'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=user";
			</script>
		<?php
	}
	}else{
		$sql = "UPDATE user SET Username='$Username',Password='$Password' WHERE IdUser='$IdUser'";
	$qry = mysql_query($sql);
	if($qry){
		?>
			<script type="text/javascript">
				alert('Ubah data berhasil');
				document.location="admin.php?mod=user";
			</script>
		<?php
	}	
	}

	
}elseif ($act=='del') {
	$sql = "DELETE FROM user WHERE IdUser='".$_GET['id']."'";
	$qry = mysql_query($sql);
		if($qry){
		?>
			<script type="text/javascript">
				alert('Hapus data berhasil');
				document.location="admin.php?mod=user";
			</script>
		<?php
	}
}
?>