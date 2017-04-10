<?php
/* @var $this GudangController */
/* @var $model Gudang */

$this->breadcrumbs=array(
	'Gudangs'=>array('index'),
	'Menu Gudang',
);

//$this->menu=array(
//	array('label'=>'List Gudang', 'url'=>array('index')),
//	array('label'=>'Manage Gudang', 'url'=>array('admin')),
//);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>