<?php
/* @var $this SlipGajiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Update',
);

$this->menu=array(
	array('label'=>'Menu Barang', 'url'=>array('create')),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h2>Silahkan Memilih Id Barang Yang Ingin Diubah</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viuw',

)); ?>
