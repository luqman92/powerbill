<?php
	if(!empty($_SESSION['uname']) || !empty($_SESSION['uname'])){
		session_destroy();
		?>
		<script type="text/javascript">
			document.location="index.php";
		</script>
		<?php
	}
?>