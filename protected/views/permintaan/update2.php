<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */

$this->breadcrumbs=array(
	'Permintaans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Status',
);

$this->menu=array(
	//array('label'=>'List Permintaan', 'url'=>array('index')),
	//array('label'=>'Create Permintaan', 'url'=>array('create')),
	//array('label'=>'View Permintaan', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Permintaan', 'url'=>array('admin')),
	array('icon'=>'icon-circle-arrow-left','label'=>'Kembali', 'url'=>array('daftar'),'visible'=>Yii::app()->user->getLevel()=='2'),
);
?>

<h1>Update Permintaan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_firm', array('model'=>$model)); ?>