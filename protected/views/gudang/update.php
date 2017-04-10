<?php
/* @var $this GudangController */
/* @var $model Gudang */

$this->breadcrumbs=array(
	'Gudangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
	//array('label'=>'List Gudang', 'url'=>array('index')),
//	array('label'=>'Menu Gudang', 'url'=>array('create')),
	//array('label'=>'View Gudang', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Gudang', 'url'=>array('admin')),
//);
?>



<?php $this->renderPartial('_firm', array('model'=>$model)); ?>