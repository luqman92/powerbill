<?php
include_once "../config/koneksi.php";
session_start();

$username= $_POST['username'];
$password= $_POST['password'];

$sql = "SELECT Username FROM User WHERE username='$username'";
$qry = mysql_query($sql);
$rows = mysql_num_rows($qry);

if($rows !=0){
	$sql = "SELECT * FROM User WHERE Password='$password' AND Username='$username'";
	$qry = mysql_query($sql);
	$data = mysql_fetch_assoc($qry);
	$rows = mysql_num_rows($qry);
	$_SESSION['uname'] = $data['Username'];
	$_SESSION['pass'] = $data['Password'];
	?>
		<script type="text/javascript">
			document.location="../admin.php";
		</script>
	<?php
}else{
	?>
	<script type="text/javascript">
		alert("Maaf Username atau Password salah");
		document.location='../index.php';
	</script>
	<?php
}

?>