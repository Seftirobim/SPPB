<?php
/* @var $this SppbController */
/* @var $model Sppb */

$this->breadcrumbs=array(
	'Sppbs'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Sppb', 'url'=>array('index')),
//	array('label'=>'Manage Sppb', 'url'=>array('admin')),
//);
?>

<h1>Menu Sppb</h1>
<?php  

?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>