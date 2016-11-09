<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<a class="btn btn-primary" href="admin.php?mod=user-add"><span class='fa fa-plus'></span> User</a>
	
		<table class="table table-resnponsive">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Password</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once "config/koneksi.php";
					$sql = "SELECT * FROM user";
					$qry = mysql_query($sql);
					$no = 1;
					while($data=mysql_fetch_array($qry)){
				?>
				<tr>
					<td><?=$no;?></td>
					<td><?=$data['Username'];?></td>
					<td><?=$data['Password'];?></td>
					<td><a href="admin.php?mod=user-update&id=<?=$data['IdUser']?>"><i class="fa fa-edit"></i></a> | <a href="admin.php?mod=user-proccess&act=del&id=<?=$data['IdUser']?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php
				$no++;
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<!-- /.row -->