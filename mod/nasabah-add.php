<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Nasabah Add</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="admin.php?mod=nasabah-proccess&act=add" method="post" autofocus>
			<div class="form-group">
				<label>No Kartu CC</label>
				<input class="form-control" type="text" name="NoKartuCc" autofocus>
			</div>
			<div class="form-group">
				<label>Nama Nasabah</label>
				<input class="form-control" type="text" name="Nama">
			</div>
			<div class="form-group">
			<label>Tempat, tgl. Lahir</label>
				<div class="input-group">
				  <input type="text" class="form-control" name="TmptLahir" placeholder="Tempat Lahir" aria-describedby="basic-addon2">
				  <span class="input-group-addon" id="basic-addon2"></span>
				   <input type="text" class="form-control" name="TglLahir" placeholder="Tanggal Lahir" aria-describedby="basic-addon2">
				</div>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea class="form-control" name="Alamat"></textarea>
			</div>
			<div class="form-group">
				<label>Nomor KTP</label>
				<input class="form-control" type="text" name="Ktp">
			</div>
			<div class="form-group">
				<label>Telpon</label>
				<input class="form-control" type="text" name="Telpon">
			</div>
			<div class="form-group">
				<label>Ibu Kandung</label>
				<input class="form-control" type="text" name="IbuKandung">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" type="text" name="Email">
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