<?php
/* @var $this GudangController */
/* @var $model Gudang */

$this->breadcrumbs=array(
	'Gudangs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('icon'=>'icon-eye-open','label'=>'List Gudang', 'url'=>array('index')),
	array('icon'=>'icon-edit','label'=>'Update Gudang', 'url'=>array('update', 'id'=>$model->id)),
	array('icon'=>'icon-trash','label'=>'Delete Gudang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('icon'=>'icon-cog','label'=>'Manage Gudang', 'url'=>array('admin')),
	array('icon'=>'icon-arrow-left','label'=>'Kembali', 'url'=>array('create')),
);
?>

<h1>View Gudang #<?php echo $model->id; ?></h1>
<div class="well">
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_gudang',
		'nama_gudang',
	),
)); ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>