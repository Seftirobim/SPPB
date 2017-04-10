
<?php 
foreach($model as $data)
?>

<?php
function TanggalIndo($data){
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
	$tahun = substr($data, 0, 4);
	$bulan = substr($data, 5, 2);
	$tgl   = substr($data, 8, 2);
 
	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
	return($result);
}
?>
<html>
<style type="text/css">
table {
    border-collapse: collapse;
  
}
</style>
<body>
<p align="center">
	<img width="275" src="<?php echo Yii::app()->getBaseUrl(TRUE);?>/images/surat.png" />
</p>

<p>

</p>
<table border="0" style="width:100%">
	<tr>
		<td >Kode Departemen</td>
		<td>:</td>
		<td width="350"><?php echo $data->kode_dept ?></td>
		<td>No.Sppb</td>
		<td>: <?php echo $data->no_sppb ?></td>

	</tr>
	<tr>
		<td >Permintaan Departemen</td>
		<td>:</td>
		<td width="250"> <?php echo $data->permintaan_dept ?></td>
		<td>Tgl.Sppb</td>
		<td>: <?php echo  TanggalIndo($data->tgl_sppb) ?></td>

	</tr>
	<tr>
		<td >Gudang Tujuan</td>
		<td>:</td>
		<td width="250"><?php echo $data->kode_gudang ?></td>

	</tr>


</table>
<br>
<p>Pada Bagian Gudang Bahan Baku /Kimia/Pelumas/ Sparepart/ Campuran/ ATK & Umum
mohon agar dapat diberikan sejumlah barang di bawah ini :</p>
<table border="1" align="center" width="100%">
	<tr>
		<th align="center" rowspan="2" width="20">No</th>
		<th align="center" rowspan="2" width="200">Nama Barang</th>
		<th align="center" rowspan="2"width="50">Satuan</th>
		<th align="center"rowspan="2"width="50">Kode Barang</th>
		<th align="center" colspan="2" width="50">Jumlah</th>
		<th align="center" rowspan="2" width="200">Keterangan</th>

	</tr>
	<tr>
		
		
		<th align="center" width="60">Qty Request</th>
		<th align="center" width="60">Qty Realisasi</th>
	
	</tr>
	<?php $no =1; ?>
	<?php foreach($data->barangs as $birings) : ?>
		<tr>
			<td align="center"><?php echo $no ?></td>

			<td align="center"><?php echo $birings->nm_barang ?></td>

			<td align="center"><?php echo $birings->satuan ?></td>
			
			<td align="center"><?php echo $birings->kd_brg ?></td>
			
			<td align="center"><?php echo $birings->qty_request ?></td>
			
			<td align="center"><?php echo $birings->qty_realisasi ?></td>
			
			<td align="center"><?php echo $birings->keterangan ?></td>
		</tr>

		<?php $no++;?>
		<?php endforeach ?>


		<tr>
			<td  align="center" colspan="4"> TOTAL</td>
			<td align="center">

			<?php
			$i = 0 ;
			foreach ($data->barangs as $birings) {
				$birings->qty_realisasi;
				$i += $birings->qty_request;
			}
			echo $i; ?>
			</td>

			<td align="center">
			<?php
			$i = 0 ;
			foreach ($data->barangs as $birings) {
				$birings->qty_realisasi;
				$i += $birings->qty_realisasi;
			}
			echo $i; ?>
			</td>
			<td></td>
		</tr>
	


</table>
<br>
<table border="1" width="100%" align="center">
	<tr>
	<th colspan="2" width="300" align="center">Dibuat Oleh</th>
	
	<th width="200" align="center">Diserahkan</th>
	<th width="135" align="center">Diterima</th>


	</tr>

	<!-- Terakhir -->
	<tr>

	<td height="100"  align="center"></td>
	<td valign="bottom" align="center"></td>
	<td valign="bottom" align="center"></td>
	<td valign="bottom" align="center"></td>


	</tr>
	<tr>

	<td valign="bottom" align="center">Adm</td>
	<td valign="bottom" align="center">SM.SSM</td>
	<td valign="bottom" align="center">Bag.Gudang</td>
	<td valign="bottom" align="center">Nama Jelas</td>


	</tr>

</table>

</body>
</html>
