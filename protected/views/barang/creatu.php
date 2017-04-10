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

<h1>Menu Barang</h1>

<?php $this->renderPartial('_firm', array('model'=>$model)); ?>