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

	<table class="zebra-table">
	<thead>
		<tr>
			<th><center>ID</center></th>
			<th><center>USER</center></th>
			<th><center>PASSWORD</center></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
			<center>
				<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id,array(
				'style'=>'color:red'),)); ?>
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->user); ?>

			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::encode($data->password); ?>
	
			</center>
			</td>
			
		</tr>
	</tbody>
</table>



</div>