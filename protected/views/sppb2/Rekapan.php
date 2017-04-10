<?php foreach ($lapor as $data );?>


<style type="text/css">
table {
    border-collapse: collapse;
}
th{
	text-align: center; 
}
td{
	text-align: center;
}
.warna1{
	background-color: #34EB48;
}
.warna2{
	background-color: #FF7800;
}
.warna3{
	background-color: #EAEAEA;
}
</style>
<?php if ($lapor):?>
<p align="right">
<h2><img src="<?php echo Yii::app()->getBaseUrl(TRUE);?>/images/logo2.png" /> PT INDO EVEREST TEXINDO
<h5>Jl. Cisirung No. 101 KM. 02 (Cangkuang Wetan) Moh. Toha</h5>
</h2>

</p>
<table border="1" align="center">
	<tr>
	<td>	
		<h1 align="center">Data Rekap Bulan
		<?php 
		 $cobadulu = substr($data->year, 3);
		 if ($cobadulu == '01'){
		 	echo "Januari";
		 }
		 elseif ($cobadulu == '02'){
		 	echo "Februari";
		 }
		 elseif ($cobadulu == '03'){
		 	echo "Maret";
		 }
		 elseif ($cobadulu == '04'){
		 	echo "April";
		 }
		 elseif ($cobadulu == '05'){
		 	echo "Mei";
		 }
		 elseif ($cobadulu == '06'){
		 	echo "Juni";
		 }	
		 elseif ($cobadulu == '07'){
		 	echo "Juli";
		 }
		 elseif ($cobadulu == '08'){
		 	echo "Agustus";
		 }
		 elseif ($cobadulu == '09'){
		 	echo "September";
		 }
		 elseif ($cobadulu == '10'){
		 	echo "Oktober";
		 }
		 elseif ($cobadulu == '11'){
		 	echo "November";
		 }
		 elseif ($cobadulu == '12'){
		 	echo "Desember";
		 }
		?> 
		Tahun 20<?php echo substr($data->year,-5,2) ?></h1>
	</td>
	</tr>
</table>
<br>
<table border="1" width="100%" align="center">
	

			<tr>
			<th style="background-color: #757575;" width="20">No</th>
			<th width="20" colspan="6" style="background-color: #757575;"></th>
			</tr>
			<?php $no = 1;?>
			<?php foreach ($lapor as $lapors) :?>
			<?php $tanggal_masuk = $lapors->year?>
			<tr>
			<td colspan="7" height="5"></td>
			</tr>	
			
			<tr>

				<td><?php echo $no; ?></td>
				<th width="150" class="warna1">Kode Departemen</th>
				<th width="250" class="warna1">Permintaan Departemen</th>
				<th width="100" class="warna1">Gudang Tujuan</th>
				<th class="warna1">No Sppb</th>
				<th class="warna1">Tanggal Sppb</th>
				<th width="100" class="warna1"></th>
					
			</tr>
				
			<tr>
				<td></td>
				<td class="warna3">  <?php echo $lapors->kode_dept ;?> </td>
				<td class="warna3">  <?php echo $lapors->permintaan_dept ;?> </td>
				<td class="warna3">  <?php echo $lapors->kode_gudang ;?> </td>
				<td class="warna3">  <?php echo $lapors->no_sppb; ?> </td>
				<td class="warna3">  <?php echo $lapors->tgl_sppb ;?> </td>
				<td class="warna3"></td>

					

			
			</tr>
			<tr>
				<th></th>
				<th class="warna2">Kode Barangs</th>
				<th class="warna2">Nama Barang</th>
				<th class="warna2">Satuan</th>
				<th class="warna2">Qty Request</th>
				<th class="warna2">Qty Realisasi</th>
				<th class="warna2" width="200" >Keterangan</th>
					
			</tr>
				<?php foreach ($lapors->barangs as $lipirs) :?>
			<tr>	
						<td></td>
						<td class="warna3">  <?php echo $lipirs->kd_brg;?> </td>
						<td class="warna3">  <?php echo $lipirs->nm_barang ;?> </td>
						<td class="warna3">  <?php echo $lipirs->satuan ;?> </td>
						<td class="warna3">  <?php echo $lipirs->qty_request; ?> </td>
						<td class="warna3">  <?php echo $lipirs->qty_realisasi ;?> </td>
						<td class="warna3">  <?php echo $lipirs->keterangan ;?> </td>
					
					
			</tr>

			
				<?php endforeach ?>	
			<tr>
				<td colspan="4">TOTAL</td>
				<td>
				<?php 
				$i =0;
				foreach ($lapors->barangs as $birings) {
					$birings->qty_request;
					$i += $birings->qty_request;
				}
				echo $i;
				?>
				</td>

				<td>
				<?php 
				$i =0;
				foreach ($lapors->barangs as $birings) {
					$birings->qty_request;
					$i += $birings->qty_realisasi;
				}
				echo $i;
				?>	
				</td>
				<td></td>
			</tr>
			<?php $no ++;?>
			<?php endforeach ?>
</table>
<?php 
		$sql = "
			select count(id) as id from sppb2 where year = '$tanggal_masuk' 
		";
		$data = Yii::app()->db->createCommand($sql)->queryRow();
	?>
	<h4 style="color:green">Total Surat Permintaan Dan Pengeluaran Barang : <?php echo $data['id']?></h4>
<?php else :?>

	<h1 align="center"> Data Tidak ADA</h1>
	<h2 align="center"> Silahkan ulangi</h2>
<?php endif ?>

