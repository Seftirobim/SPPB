<?php
$this->breadcrumbs=array(
	'Sppb2s'=>array('index'),
	'Laporan / Tahun',
);
?>
<?php
$this->menu=array(
	array('label'=>'Daftar Sppb', 'url'=>array('index')),
	array('label'=>'Create Sppb', 'url'=>array('create')),
	array('label'=>'Manage Sppb', 'url'=>array('admin')),
	array('label'=>'List Update', 'url'=>array('InUpdate')),
);
?>

<h4>Silahkan Cari Laporan SPPB/ Tahun</h4>


<div class="form">
<?php
 $form = $this->beginWidget('bootstrap.widgets.TbActiveForm',array(
 	'id'=>'Sppb2-form',
 	'enableAjaxValidation'=>false,
 )); ?>

 	<?php echo $form->errorSummary($model); ?>

 	
 	<?php echo $form->labelEx($model,'year');?>
 	<?php echo $form->textField($model,'year');?>
 	<?php echo $form->error($model,'year');?>
 	

 	
 	<?php echo $form->labelEx($model,'Tanggal Awal'); ?>
 	<?php 
 	$properties = array(
 		'model'=>$model,
 		'attribute'=>'firstDate',
 		'options'=>array(
 			'showAnim'=>'slide',
 			'dateFormat'=>'yy-mm-dd',
 			'showButtonPanel'=>true,
 			'changeMonth'=>true,
        			'changeYear'=>true,
 			),
 		);
 	$this->widget('zii.widgets.jui.CJuiDatePicker',$properties);
 	 ?>
 	 <?php echo $form->error($model,'firstDate'); ?>
 	

 	
 	 <?php echo $form->labelEx($model,'lastDate'); ?>
 	<?php
 	$properties = array(
 		'model'=>$model,
 		'attribute'=>'lastDate',
 		'options'=>array(
 			'showAnim'=>'slide',
 			'dateFormat'=>'yy-mm-dd',
 			'showButtonPanel'=>true,
 			'changeMonth'=>true,
        			'changeYear'=>true,
 			),
 		);
 	$this->widget('zii.widgets.jui.CJuiDatePicker',$properties);
 	 ?>
 	 <?php echo $form->error($model,'lastDate'); ?>
 	

 	<div class="form-actions">
 	
		<?php 
		
		$this->widget('bootstrap.widgets.TbButton',array(
			'buttonType'=>'submit',
			'type'=> 'primary',
			'label'=>'View',
			'block'=>true,
			));
		

		$this->widget('bootstrap.widget.TbButton',array(
			'buttonType'=>'reset',
			'type'=>'danger',

			'block'=>true,
			'label'=>'Reset',
			
			));
		//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');  ?>

	</div>
<?php $this->endWidget(); ?>

</div> <!-- form -->

<?php if ($lapor): ?>
	<h1>Pilih Id Untuk Lihat Detail</h1>
	<table class ="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Kode Departemen</th>
				<th>Permintaan Departemen</th>
				<th>Gudang Tujuan</th>
				<th>No Sppb</th>
				<th>Tanggal Sppb</th>
				<th>Tahun</th>	
			</tr>
			
		</thead>

		<tbody>
			<?php foreach ($lapor as $lapors) :?>
			<tr>
				<td> <?php echo CHtml::link(CHtml::encode($lapors->id), array('view', 'id'=>$lapors->id)); ?></td>
				<td>  <?php echo $lapors->kode_dept ;?> </td>
				<td>  <?php echo $lapors->permintaan_dept ;?> </td>
				<td>  <?php echo $lapors->gudang_tujuan ;?> </td>
				<td>  <?php echo $lapors->no_sppb; ?> </td>
				<td>  <?php echo $lapors->tgl_sppb ;?> </td>
				<td>  <?php echo $lapors->year ;?> </td>

			<?php endforeach;?>
			</tr>
			
		</tbody>
	</table>

<?php else: ?>
 <?php 
 echo "Data Tidak Di Temukan , Kemungkinan Salah Tahun"."</br></br>";
 echo "Silahkan Cari";
 ?>

 <br>
 <br>

 <?php endif; ?>