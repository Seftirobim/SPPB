<?php
/* @var $this GudangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gudangs',
);

$this->menu=array(
	array('label'=>'Menu Gudang', 'url'=>array('create')),
	array('label'=>'Manage Gudang', 'url'=>array('admin')),
);
?>

<h1>Gudangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
