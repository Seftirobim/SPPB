<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('icon'=>'icon-eye-open','label'=>'List User', 'url'=>array('index')),
	array('icon'=>'icon-pencil','label'=>'Create User', 'url'=>array('create')),
	array('icon'=>'icon-edit','label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('icon'=>'icon-trash','label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('icon'=>'icon-cog','label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'level_id',
	),
)); ?>
