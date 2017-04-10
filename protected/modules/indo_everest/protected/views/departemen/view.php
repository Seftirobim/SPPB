<?php
/* @var $this DepartemenController */
/* @var $model Departemen */

$this->breadcrumbs=array(
	'Departemens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Departemen', 'url'=>array('index')),
	array('label'=>'Create Departemen', 'url'=>array('create')),
	array('label'=>'Update Departemen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Departemen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Departemen', 'url'=>array('admin')),
);
?>

<h1>View Departemen #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_dept',
		'nama_dept',
	),
)); ?>
