<?php
include_once "config/koneksi.php";
$id = @$_GET['id'];
if(!empty($id)){

$sql1 = "SELECT * FROM nasabah";
$qry1 = mysql_query($sql1);

$sql2 = "SELECT * FROM provider";
$qry2 = mysql_query($sql2);

$sql3 = "SELECT * FROM agent";
$qry3 = mysql_query($sql3);

$sqlu = "SELECT
		a.IdTrx,
		a.IdNasabah,
		a.IdProv,
		a.IdAgent,
		b.Nama,
		c.NamaProvider,
		a.NoPelanggan,
		d.Agent
		FROM
		trxpowerbill AS a
		INNER JOIN nasabah AS b ON a.IdNasabah = b.IdNasabah AND b.IdNasabah = a.IdNasabah
		INNER JOIN provider AS c ON c.IdProv = a.IdProv
		INNER JOIN agent AS d ON d.IdAgent = a.IdAgent 
		WHERE IdTrx='$id'";
$qryu = mysql_query($sqlu);
$data = mysql_fetch_assoc($qryu);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Target Powerbill Update</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="admin.php?mod=data-powerbill-proccess&act=update" method="post">
			<div class="form-group">
				<!-- <label>Kode Agen</label> -->
				<input class="form-control" type="hidden" name="IdTrx" value="<?=$data['IdTrx']?>">
			</div>

						<div class="form-group">
				<label>Nasabah</label>
				<select class="form-control" name="IdNasabah">
					<option>-- Pilih --</option>
					<?php
						while($arr=mysql_fetch_array($qry1)){
						$selnas="";
						if($data['IdNasabah'] == $arr['IdNasabah']){
							$selnas="selected";
						}
					?>
						<option value="<?php echo $arr['IdNasabah']; ?>" <?=$selnas;?>><?php echo $arr['Nama']; ?></option>
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
							$selprov="";
							if($data['IdProv'] == $arr['IdProv']){
								$selprov="selected";
							}
					?>
						<option value="<?php echo $arr['IdProv']; ?>" <?=$selprov?>><?php echo $arr['NamaProvider']; ?></option>
					<?php
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label>No Pelanggan</label>
				<input class="form-control" type="text" name="NoPelanggan" value="<?=$data['NoPelanggan']?>">
			</div>

			<div class="form-group">
				<label>Agent</label>
				<select class="form-control" name="IdAgent">
					<option>-- Pilih --</option>
					<?php
						while($arr=mysql_fetch_array($qry3)){
							$selagn="";
							if($data['IdAgent'] == $arr['IdAgent']){
								$selagn="selected";
							}
					?>
						<option value="<?php echo $arr['IdAgent']; ?>" <?=$selagn?>><?php echo $arr['Agent']; ?></option>
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
<?php
}
?>