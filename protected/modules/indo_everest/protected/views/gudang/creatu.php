<?php
/* @var $this GudangController */
/* @var $model Gudang */

$this->breadcrumbs=array(
	'Gudangs'=>array('index'),
	'Menu Gudang',
);

$this->menu=array(
	array('label'=>'List Gudang', 'url'=>array('index')),
	array('label'=>'Manage Gudang', 'url'=>array('admin')),
);
?>

<h1>Menu Gudang</h1>

<?php $this->renderPartial('_firm', array('model'=>$model)); ?>