<?php
/* @var $this SppbController */
/* @var $model Sppb */

$this->breadcrumbs=array(
	'Sppbs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sppb', 'url'=>array('index')),
	array('label'=>'Create Sppb', 'url'=>array('create')),
	array('label'=>'Update Sppb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sppb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sppb', 'url'=>array('admin')),
);
?>

<h1>View Sppb #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_dept',
		'permintaan_dept',
		'gudang_tujuan',
		'no_sppb',
		'tlg_sppb',
		'nm_barang',
		'satuan',
		'kd_barang',
		'qty_request',
		'qty_realisasi',
		'keterangan',
	),
)); ?>
