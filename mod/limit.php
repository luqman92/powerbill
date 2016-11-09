<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Limit Pinjaman</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<a class="btn btn-primary" href="admin.php?mod=limit-add"><span class='fa fa-plus'></span> Limit</a>
	
		<table class="table table-resnponsive">
			<thead>
				<tr>
					<th>No</th>
					<th>Limit</th>
					<th>Terbilang</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once "config/koneksi.php";
					include_once "config/lib.php";
					$sql = "SELECT * FROM limitp";
					$qry = mysql_query($sql);
					$rows = mysql_num_rows($qry);
					$no = 1;
					if($rows !=0){
					while($data=mysql_fetch_array($qry)){
				?>
				<tr>
					<td><?=$no;?></td>
					<td><?=format_angka($data['LimitP']);?></td>
					<td><?=terbilang($data['LimitP']);?></td>
					<td><a href="admin.php?mod=limit-update&id=<?=$data['IdLimit']?>"><i class="fa fa-edit"></i></a> | <a href="admin.php?mod=limit-proccess&act=del&id=<?=$data['IdLimit']?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php
				$no++;
					}
				}else{
					?>
					<tr>
						<td colspan="4" style="text-align:center;">Data Kosong</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>	
	</div>
</div>
<!-- /.row -->