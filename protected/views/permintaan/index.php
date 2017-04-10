<?php
/* @var $this PermintaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Permintaans',
);

$this->menu=array(
	//array('label'=>'Create Permintaan', 'url'=>array('create')),
	array('icon'=>'icon-cog','label'=>'Manage & Konfirmasi Permintaan', 'url'=>array('Daftar')),
);
?>

<h1>Permintaan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
