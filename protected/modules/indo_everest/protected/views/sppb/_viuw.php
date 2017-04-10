	<?php
/* @var $this LoginController */
/* @var $data Login */
?>
<style>
/* CSS for Zebra Table in index.html */
 .zebra-table {
 width: 100%;
 border-collapse: collapse;
 box-shadow: 0 2px 3px 1px #ddd;
 overflow: hidden;
 border:10px solid #fff;

 }
 .zebra-table th,.zebra-table td{
 vertical-align: top;
 padding:10px 7px;
 text-align: left;
 margin:0;

 }
 .zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
 background:#CBCBCB;

 }/* End CSS for Zebra Table in index.html */
</style>
<div class="view">

	<table class="zebra-table" style="width:100%">
	<thead>
		<tr>
			<th><center>ID</center></th>
			<th><center>Kode Departemen</center></th>
			<th><center>Permintaan Departemen</center></th>
			<th><center>Gudang Tujuan</center></th>
			<th><center>No SPPB</center></th>
			<th><center>Tanggal SPPB</center></th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
			<center>
				<?php echo CHtml::link(CHtml::encode($data->id), array('update', 'id'=>$data->id)); ?>
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->kode_dept); ?>

			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->permintaan_dept); ?>
	
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->gudang_tujuan); ?>
	
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->no_sppb); ?>
	
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->tlg_sppb); ?>
	
			</center>
			</td>
			
			
		</tr>
	</tbody>
</table>



</div>
</br>