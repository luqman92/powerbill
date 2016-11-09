<?php
include_once "config/koneksi.php";
$id = @$_GET['id'];
if(!empty($id)){
$sql = "SELECT * FROM limitp WHERE IdLimit='$id'";
$qry = mysql_query($sql);
$data = mysql_fetch_assoc($qry);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Pokok Pinjaman Update</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="admin.php?mod=limit-proccess&act=update" method="post">
			<div class="form-group">
				<!-- <label>Kode Agen</label> -->
				<input class="form-control" type="hidden" name="IdLimit" value="<?=$data['IdLimit']?>">
			</div>
			
			<div class="form-group">
				<label>Jumlah Pokok</label>
				<input class="form-control" type="text" name="LimitP" value="<?=$data['LimitP']?>">
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