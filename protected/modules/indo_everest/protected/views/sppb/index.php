<?php
/* @var $this SppbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lihat SPPB',
);

$this->menu=array(
	array('label'=>'Create Sppb', 'url'=>array('create')),
	array('label'=>'Manage Sppb', 'url'=>array('admin')),
);
?>

<h1>Lihat SPPB</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
