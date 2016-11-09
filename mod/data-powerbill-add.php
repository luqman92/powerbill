<?php
include_once "config/koneksi.php";
$sql1 = "SELECT * FROM nasabah";
$qry1 = mysql_query($sql1);

$sql2 = "SELECT * FROM provider";
$qry2 = mysql_query($sql2);

$sql3 = "SELECT * FROM agent";
$qry3 = mysql_query($sql3);

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Powerbill Add</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="admin.php?mod=data-powerbill-proccess&act=add" method="post" autofocus>
			<div class="form-group">
				<label>Nasabah</label>
				<select class="form-control" name="IdNasabah">
					<option>-- Pilih --</option>
					<?php
						while($arr=mysql_fetch_array($qry1)){
					?>
						<option value="<?php echo $arr['IdNasabah']; ?>"><?php echo $arr['Nama']; ?></option>
					<?php
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label>Provider</label>
				<select class="form-control" name="IdProv">
					<option>-- Pilih --</option>
					<?php
						while($arr=mysql_fetch_array($qry2)){
					?>
						<option value="<?php echo $arr['IdProv']; ?>"><?php echo $arr['NamaProvider']; ?></option>
					<?php
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label>No Pelanggan</label>
				<input class="form-control" type="text" name="NoPelanggan" autofocus>
			</div>

			<div class="form-group">
				<label>Agent</label>
				<select class="form-control" name="IdAgent">
					<option>-- Pilih --</option>
					<?php
						while($arr=mysql_fetch_array($qry3)){
					?>
						<option value="<?php echo $arr['IdAgent']; ?>"><?php echo $arr['Agent']; ?></option>
					<?php
						}
					?>
				</select>
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