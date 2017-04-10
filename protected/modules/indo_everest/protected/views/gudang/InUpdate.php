<?php
/* @var $this SlipGajiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Update',
);

$this->menu=array(
	array('label'=>'Menu Gudang', 'url'=>array('create')),
	array('label'=>'Manage Gudang', 'url'=>array('admin')),
);
?>

<h2>Silahkan Memilih ID Gudang Yang Ingin Diubah</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viuw',

)); ?>
