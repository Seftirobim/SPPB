<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */

$this->breadcrumbs=array(
	'Permintaans'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('icon'=>'icon-eye-open','label'=>'List Permintaan', 'url'=>array('index')),
	//array('label'=>'Create Permintaan', 'url'=>array('create')),
	array('icon'=>'icon-eye-open','label'=>'Laporan Status', 'url'=>array('Permintaan/Cari2'),'visible'=>Yii::app()->user->getLevel()=='2'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#permintaan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php echo Chtml::form(array('deleteBanyak'));?>
<div class="well">
<h1>Daftar Permintaan</h1>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'stripped,bordered,condensed',
	'id'=>'permintaan-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
		'id'=>'id',
		'class'=>'CCheckBoxColumn',
		'selectableRows'=>'2',
			),

		'id',
		'no_per',
		'nama_dept',
		'tgl',
		array(
		'name'=>'message',
		'header'=>'message',
		'value'=>$model->message,
		'type'=>'HTML'
			),
		'status',
		'lama_waktu',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'buttons'=>array(
					'confirm'=>array(
							'label'=>'Konfirmasi',
							'icon'=>'icon-ok',
							//'url'=>'Yii::app()->createUrl("/sumbangandonatur/confirm",array("id"=>$model->id))',
							'url'=>'Yii::app()->createUrl(\'Permintaan/confirm\',array(\'id\'=>\'\'.$data->id.\'\'))',
						),
					'confirm2'=>array(
							'label'=>'Konfirmasi Barang Kosong',
							'icon'=>'icon-ban-circle',
							//'url'=>'Yii::app()->createUrl("/sumbangandonatur/confirm",array("id"=>$model->id))',
							'url'=>'Yii::app()->createUrl(\'Permintaan/confirm2\',array(\'id\'=>\'\'.$data->id.\'\'))',
						),
					'update2'=>array(
							'label'=>'Update Status Detail',
							'icon'=>'icon-edit',
							//'url'=>'Yii::app()->createUrl("/sumbangandonatur/confirm",array("id"=>$model->id))',
							'url'=>'Yii::app()->createUrl(\'Permintaan/update2\',array(\'id\'=>\'\'.$data->id.\'\'))',
						)
				),
			'template'=>'{view} {confirm}</br></br>{confirm2} {update2}'

		),
		
	),
)); ?>
</div>
<script type="text/javascript">
	function reloadGrid(data){
		$.fn.yiiGridView.update('permintaan-grid');
	}
</script>

<div>
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); 
		$this->widget('bootstrap.widgets.TbButton',array(
				'buttonType'=>'submit',
				'icon'=>'icon-trash',
				'type'=>'danger',
				'label'=>'Hapus Item cek',
				'htmlOptions'=>array(
						'onclick'=>'return confirm("Apa Kamu Yakin Ingin Menghapus Item Ini ?")',
					),
				
				'block'=>false,
				));
		
		?>
		</div>

<?php echo CHtml::endForm(); ?>
