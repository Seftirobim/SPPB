<?php
/* @var $this SlipGajiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Update',
);

$this->menu=array(
	array('label'=>'User Menu', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2>Silahkan Memilih User Yang Ingin Diubah</h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viuw',

)); ?>
</br>
