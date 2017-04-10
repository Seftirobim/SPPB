<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	'Menu Barang',
);

//$this->menu=array(
//	array('label'=>'List Barang', 'url'=>array('index')),
//	array('label'=>'Manage Barang', 'url'=>array('admin')),
//);
?>


<br>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>