<?php
/* @var $this DepartemenController */
/* @var $model Departemen */

$this->breadcrumbs=array(
	'Departemens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
	//array('label'=>'List Departemen', 'url'=>array('index')),
//	array('label'=>'Menu Departemen', 'url'=>array('create')),
	//array('label'=>'View Departemen', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Departemen', 'url'=>array('admin')),
//);
?>



<?php $this->renderPartial('_firm', array('model'=>$model)); ?>