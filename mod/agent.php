<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Agent</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<a class="btn btn-primary" href="admin.php?mod=agent-add"><span class='fa fa-plus'></span> Agent</a>
	
		<table class="table table-resnponsive">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Agent</th>
					<th>Nama</th>
					<th>Nama Asli</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once "config/koneksi.php";
					$sql = "SELECT * FROM agent";
					$qry = mysql_query($sql);
					$rows = mysql_num_rows($qry);
					$no = 1;
					if($rows !=0){
					while($data=mysql_fetch_array($qry)){
				?>
				<tr>
					<td><?=$no;?></td>
					<td><?=$data['KdAgent'];?></td>
					<td><?=$data['Agent'];?></td>
					<td><?=$data['NamaAsli'];?></td>
					<td><a href="admin.php?mod=agent-update&id=<?=$data['IdAgent']?>"><i class="fa fa-edit"></i></a> | <a href="admin.php?mod=agent-proccess&act=del&id=<?=$data['IdAgent']?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i></a></td>
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