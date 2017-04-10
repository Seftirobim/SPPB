<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */

$this->breadcrumbs=array(
	'Permintaan'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List Permintaan', 'url'=>array('index')),
	// array('label'=>'Manage Permintaan', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>