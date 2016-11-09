<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Powerbill</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<a class="btn btn-primary" href="admin.php?mod=data-powerbill-add"><span class='fa fa-plus'></span> Data Powerbill</a>
	
		<table class="table table-resnponsive">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Nasabah</th>
					<th>Provider</th>
					<th>No Pelanggan</th>
					<th>Agent</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once "config/koneksi.php";
					include_once "config/lib.php";
					$sql = "SELECT
							a.IdTrx,
							b.Nama,
							c.NamaProvider,
							a.NoPelanggan,
							d.Agent
							FROM
							trxpowerbill AS a
							INNER JOIN nasabah AS b ON a.IdNasabah = b.IdNasabah AND b.IdNasabah = a.IdNasabah
							INNER JOIN provider AS c ON c.IdProv = a.IdProv
							INNER JOIN agent AS d ON d.IdAgent = a.IdAgent
							";
					$qry = mysql_query($sql);
					$rows = mysql_num_rows($qry);
					$no = 1;
					if($rows !=0){
					while($data=mysql_fetch_array($qry)){
				?>
				<tr>
					<td><?=$no;?></td>
					<td><?=$data['Nama'];?></td>
					<td><?=$data['NamaProvider'];?></td>
					<td><?=$data['NoPelanggan'];?></td>
					<td><?=$data['Agent'];?></td>
					<td><a href="admin.php?mod=data-powerbill-update&id=<?=$data['IdTrx']?>"><i class="fa fa-edit"></i></a> | <a href="admin.php?mod=data-powerbill-proccess&act=del&id=<?=$data['IdTrx']?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i></a></td>
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