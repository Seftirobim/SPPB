<?php
/* @var $this LoginController */
/* @var $model Login */

$this->breadcrumbs=array(
	'User'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Menu User', 'url'=>array('create')),
	//array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage User', 'url'=>array('admin')),
//);
?>

<h1>Update Login <?php echo $model->id; ?></h1>
<br>
<h5 style="color:#E7002E">*Klik Tombol Update Untuk Update User</h5>

<?php $this->renderPartial('_firm', array('model'=>$model)); ?>