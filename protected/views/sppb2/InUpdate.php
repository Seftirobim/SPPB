<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/loading.js');
?>


<div id="loadings"></div>
<?php
/* @var $this SlipGajiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daftar Update',
);

$this->menu=array(
	array('icon'=>'icon-edit','label'=>'Buat Sppb', 'url'=>array('create')),
	array('icon'=>'icon-cog','label'=>'Manage Sppb', 'url'=>array('admin')),
	array('icon'=>'icon-eye-open','label'=>'Daftar Sppb', 'url'=>array('index')),
	array('icon'=>'icon-search','label'=>'Rekap Sppb', 'url'=>array('Laporan')),
	//array('icon'=>'icon-signal','label'=>'Lihat Statistik Permintaan', 'url'=>array('Chart')),

);
?>

<h2>Silahkan Memilih ID SPPB Yang Ingin Diubah</h2>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viuw',

)); ?>
