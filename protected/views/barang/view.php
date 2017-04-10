<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('icon'=>'icon-eye-open','label'=>'List Barang', 'url'=>array('index')),
	array('icon'=>'icon-edit','label'=>'Update Barang', 'url'=>array('update', 'id'=>$model->id)),
	array('icon'=>'icon-trash','label'=>'Delete Barang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('icon'=>'icon-cog','label'=>'Manage Barang', 'url'=>array('admin')),
	array('icon'=>'icon-arrow-left','label'=>'Kembali', 'url'=>array('create')),
);
?>

<h1>View Barang #<?php echo $model->id; ?></h1>
<div class="well">
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kode_barang',
		'nama_barang',
		'satuan',
	),
)); ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
