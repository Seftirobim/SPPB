<?php
/* @var $this LoginController */
/* @var $dataProvider CActiveDataProvider */
//include "_form.php";
$this->breadcrumbs=array(
	'Lihat User',
);

$this->menu=array(
	array('label'=>'User Menu', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Lihat User</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</br>
</br>
