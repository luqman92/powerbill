<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User Add</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="admin.php?mod=user-proccess&act=add" method="post">
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" name="Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="Password">
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