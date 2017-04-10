<?php
/* @var $this SppbController */
/* @var $model Sppb */

$this->breadcrumbs=array(
	'Sppbs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sppb', 'url'=>array('index')),
	array('label'=>'Create Sppb', 'url'=>array('create')),
	array('label'=>'View Sppb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sppb', 'url'=>array('admin')),
);
?>

<h1>Update Sppb <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>