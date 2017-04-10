<?php
/* @var $this SlipGajiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Update',
);

$this->menu=array(
	array('label'=>'Create Sppb', 'url'=>array('create')),
	array('label'=>'Manage Sppb', 'url'=>array('admin')),
	array('label'=>'Daftar Sppb', 'url'=>array('index')),
	array('label'=>'Data Laporan', 'url'=>array('Laporan')),

);
?>

<h2>Silahkan Memilih ID SPPB Yang Ingin Diubah</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viuw',

)); ?>
