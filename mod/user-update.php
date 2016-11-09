<?php
include_once "config/koneksi.php";
$id = @$_GET['id'];
if(!empty($id)){
$sql = "SELECT * FROM user WHERE IdUser='$id'";
$qry = mysql_query($sql);
$data = mysql_fetch_assoc($qry);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Username Update</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="admin.php?mod=user-proccess&act=update" method="post">
			<div class="form-group">
				<!-- <label>Kode Agen</label> -->
				<input class="form-control" type="hidden" name="IdUser" value="<?=$data['IdUser']?>">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" name="Username" value="<?=$data['Username']?>">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="text" name="Password" value="<?=$data['Password']?>">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Simpan</button>
				<a class="btn btn-primary" href="javascript:history.back(-1)">Batal</a>
			</div>
		</form>
	</div>
	<div class="col-lg-3"></div>

</div>
<!-- /.row -->
<?php
}
?>