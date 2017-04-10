<?php
/* @var $this Sppb2Controller */
/* @var $model Sppb2 */

$this->breadcrumbs=array(
	'Sppb2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Sppb', 'url'=>array('index')),
	array('label'=>'Create Sppb', 'url'=>array('create')),
	array('label'=>'View Sppb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sppb', 'url'=>array('admin')),
	array('label'=>'Data Laporan', 'url'=>array('Laporan')),
);
?>

<h1>Update Sppb2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array(
	'model'=>$model, 
	'barangs' => $barangs
	)); ?>