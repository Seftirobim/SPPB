<?php
/* @var $this DepartemenController */
/* @var $model Departemen */

$this->breadcrumbs=array(
	'Departemens'=>array('index'),
	'Menu Departemen',
);

//$this->menu=array(
//	array('label'=>'List Departemen', 'url'=>array('index')),
//	array('label'=>'Manage Departemen', 'url'=>array('admin')),
//);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>