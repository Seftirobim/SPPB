<?php
/* @var $this BarangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barangs',
);

$this->menu=array(
	array('label'=>'Menu Barang', 'url'=>array('create')),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h1>Barangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
