<?php
/* @var $this Sppb2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lihat Sppb',
);

$this->menu=array(
	array('label'=>'Create Sppb', 'url'=>array('create')),
	array('label'=>'Manage Sppb', 'url'=>array('admin')),
	array('label'=>'Daftar Update Sppb', 'url'=>array('InUpdate')),
	array('label'=>'Data Laporan', 'url'=>array('Laporan')),
);
?>

<h1>Lihat Sppb</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
