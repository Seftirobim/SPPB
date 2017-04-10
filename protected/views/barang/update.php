<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
	//array('label'=>'List Barang', 'url'=>array('index')),
//	array('label'=>'Menu Barang', 'url'=>array('create')),
	//array('label'=>'View Barang', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Barang', 'url'=>array('admin')),
//);
?>


<?php $this->renderPartial('_firm', array('model'=>$model)); ?>