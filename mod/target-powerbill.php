<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Target Powerbill</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<a class="btn btn-primary" href="admin.php?mod=target-powerbill-add"><span class='fa fa-plus'></span> Target Powerbill</a>
	
		<table class="table table-resnponsive">
			<thead>
				<tr>
					<th>No</th>
					<th>Target</th>
					<th>Insentif</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once "config/koneksi.php";
					include_once "config/lib.php";
					$sql = "SELECT * FROM targetinsentif WHERE Program='Powerbill'";
					$qry = mysql_query($sql);
					$rows = mysql_num_rows($qry);
					$no = 1;
					if($rows !=0){
					while($data=mysql_fetch_array($qry)){
				?>
				<tr>
					<td><?=$no;?></td>
					<td><?=$data['Target'];?></td>
					<td><?=format_angka($data['Insentif']);?></td>
					<td><a href="admin.php?mod=target-powerbill-update&id=<?=$data['IdTarget']?>"><i class="fa fa-edit"></i></a> | <a href="admin.php?mod=target-powerbill-proccess&act=del&id=<?=$data['IdTarget']?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i></a></td>
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