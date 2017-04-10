<?php
/* @var $this DepartemenController */
/* @var $model Departemen */

$this->breadcrumbs=array(
	'Departemens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('icon'=>'icon-eye-open','label'=>'List Departemen', 'url'=>array('index')),
	array('icon'=>'icon-edit','label'=>'Update Departemen', 'url'=>array('update', 'id'=>$model->id)),
	array('icon'=>'icon-trash','label'=>'Delete Departemen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('icon'=>'icon-cog','label'=>'Manage Departemen', 'url'=>array('admin')),
	array('icon'=>'icon-arrow-left','label'=>'Kembali', 'url'=>array('create')),
);
?>
<div class="well">
<h1>View Departemen #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_dept',
		'nama_dept',
	),
)); ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>