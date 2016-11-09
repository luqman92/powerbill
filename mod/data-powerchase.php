<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Nasabah</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<a class="btn btn-primary" href="admin.php?mod=data-powerchase-add"><span class='fa fa-plus'></span> Data Powerchase</a>
	
		<table class="table table-resnponsive">
			<thead>
				<tr>
					<th>No</th>
					<th>No Kartu CC</th>
					<th>Nama Nasabah</th>
					<th>Limit</th>
					<th>Tenor</th>
					<th>No Rekening</th>
					<th>Nama Bank</th>
					<th>Alamat Bank</th>
					<th>Agent</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once "config/koneksi.php";
					include_once "config/lib.php";
					$sql = "SELECT * FROM nasabah";
					$qry = mysql_query($sql);
					$rows = mysql_num_rows($qry);
					$no = 1;
					if($rows !=0){
					while($data=mysql_fetch_array($qry)){
				?>
				<tr>
					<td><?=$no;?></td>
					<td><?=$data['NoKartuCc'];?></td>
					<td><?=$data['Nama'];?></td>
					<td><?=$data['TmptLahir'].", ".$data['TglLahir'];?></td>
					<td><?=$data['Alamat'];?></td>
					<td><?=$data['IbuKandung'];?></td>
					<td><?=$data['IbuKandung'];?></td>
					<td><?=$data['IbuKandung'];?></td>
					<td><?=$data['IbuKandung'];?></td>
					
					<td><a href="admin.php?mod=data-powerchase-update&id=<?=$data['IdNasabah']?>"><i class="fa fa-edit"></i></a> | <a href="admin.php?mod=data-powerchase-proccess&act=del&id=<?=$data['IdNasabah']?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i></a></td>
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