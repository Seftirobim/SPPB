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
<div class="well">
	<table class="zebra-table">
	<thead>
		<tr>
			<th><center>ID</center></th>
			<th><center>Kode Gudang</center></th>
			<th><center>Nama Gudang</center></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
			<center>
				<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->kode_gudang); ?>

			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->nama_gudang); ?>
	
			</center>
			</td>
			
		</tr>
	</tbody>
</table>



</div>
</div>
</br>
</br>