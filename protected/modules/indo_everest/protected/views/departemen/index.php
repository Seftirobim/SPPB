<?php
/* @var $this DepartemenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departemens',
);

$this->menu=array(
	array('label'=>'Menu Departemen', 'url'=>array('create')),
	array('label'=>'Manage Departemen', 'url'=>array('admin')),
);
?>

<h1>List Departemen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
