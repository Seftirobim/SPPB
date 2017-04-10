<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */

$this->breadcrumbs=array(
	'Permintaans'=>array('index'),
	$model->id,
);
?>	
<?php
$this->menu=array(
	//array('icon'=>'icon-eye-open','label'=>'Update Permintaan', 'url'=>array('index')),
	//array('label'=>'Create Permintaan', 'url'=>array('create')),
	array('icon'=>'icon-edit','label'=>'Update Permintaan', 'url'=>array('update', 'id'=>$model->id),'visible'=>Yii::app()->user->getLevel()=='3'),
	array('icon'=>'icon-circle-arrow-left','label'=>'Kembali', 'url'=>array('daftar'),'visible'=>Yii::app()->user->getLevel()=='2'),
	//array('icon'=>'icon-trash','label'=>'Delete Permintaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('icon'=>'icon-cog','label'=>'Manage Permintaan', 'url'=>array('admin')),
);
?>
<div class="well">
<h1>View Permintaan #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'no_per',
		'nama_dept',
		'tgl',
		array(
		'name'=>'message',
		'header'=>'meesage',
		'value'=>$model->message,
		'type'=>'HTML'
			),
		'status',
		'lama_waktu',
	),

)); ?>
</div>
