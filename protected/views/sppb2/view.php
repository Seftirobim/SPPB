<?php
/* @var $this Sppb2Controller */
/* @var $model Sppb2 */

$this->breadcrumbs=array(
	'Sppb'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('icon'=>'icon-eye-open','label'=>'Daftar Sppb', 'url'=>array('index')),
	array('icon'=>'icon-edit','label'=>'Create Sppb', 'url'=>array('create')),
	array('icon'=>'icon-edit','label'=>'Update Sppb', 'url'=>array('update', 'id'=>$model->id)),
	array('icon'=>'icon-print','label'=>'Cetak Sppb','url'=>array('Report','id'=>$model->id), 'linkOptions' => array('target' => '_blank'),),
	array('icon'=>'icon-trash','label'=>'Delete Sppb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('icon'=>'icon-cog','label'=>'Manage Sppb', 'url'=>array('admin')),
	array('icon'=>'icon-search','label'=>'Rekap Sppb', 'url'=>array('Laporan')),
	//array('icon'=>'icon-signal','label'=>'Lihat Statistik Permintaan', 'url'=>array('Chart')),
);
?>
<div class="well">
<h1>View Sppb #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_dept',
		'permintaan_dept',
		'kode_gudang',
		'no_sppb',
		'tgl_sppb',
		'year',
	),
)); ?>
			

<style>
/* CSS for Zebra Table in index.html */
 .zebra-table {
 width: 100%;
 border-collapse: collapse;
 box-shadow: 0 2px 3px 4px #ddd;
 overflow: hidden;
 border:10px solid #383838;

 }
 .zebra-table th,.zebra-table td{
 vertical-align: top;
 padding:10px 7px;
 text-align: left;
 margin:0;

 }
 .zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
 background:#EAEAEA;

 }/* End CSS for Zebra Table in index.html */
</style>
<div class="view">

	<table class="zebra-table" style="width:100%" border="0">
	<thead>
		<tr>
			<th><center></center></th>
			<th><center>Kode Barang</center></th>
			<th><center>Nama Barang</center></th>
			<th><center>Satuan</center></th>
			<th><center>Qty Request</center></th>
			<th><center>Qty Realisasi</center></th>
			<th><center>Keterangan</center></th>
			
		</tr>
	</thead>
	<tbody>
	<?php foreach($model->barangs as $birings) : ?>
		<tr>
			<td>
			<center>
				<?php //echo $birings->id2 ?>
			</center>
			</td>

			<td>
			<center>
				<?php echo $birings->kd_brg ?>
			</center>
			</td>

			<td>
			<center>
				<?php echo $birings->nm_barang ?>

			</center>
			</td>
			<td>
			<center>
				<?php echo $birings->satuan ?>
	
			</center>
			</td>
			<td>
			<center>
				<?php echo $birings->qty_request ?>
	
			</center>
			</td>
			<td>
			<center>
				<?php echo $birings->qty_realisasi ?>
	
			</center>
			</td>
			<td>
			<center>
				<?php echo $birings->keterangan ?>
	
			</center>
			</td>
			
			
		</tr>

		
		<?php endforeach ?>

		<tr>
			<td colspan="4">
			<center>
				TOTAL
			</center>
			</td>
			<td >
			<center>
			<?php 
			$i =0;
			foreach ($model->barangs as $birings) {
				$birings->qty_request;
				$i += $birings->qty_request;
			}
			echo $i;
			?>
			</center>
			</td>
			
			<td >
			<center>
			<?php 
			$i =0;
			foreach ($model->barangs as $birings) {
				$birings->qty_request;
				$i += $birings->qty_realisasi;
			}
			echo $i;
			?>
			</center>
			</td>
			<td>
			</td>
		</tr>

		<tr>
			<td colspan="3">
			<center>
					<?php 
					$i =0;
					foreach ($model->barangs as $birings) {
						$count = count($birings->kd_brg);
						$i += $count;
					}
					echo 'Jumlah Barang Yang Diminta : '.$i;
					?>
				
			</center>
			</td>
			<td>
				<center>
					
				</center>
			</td>
			<td></td>
			<td></td>
			<td></td>
	
			

		</tr>
	</tbody>
</table>
</br>
</br>


</div>
</div>


