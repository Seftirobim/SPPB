<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/loading.js');
?>

<div id="loadings"></div>
<?php
/* @var $this Sppb2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lihat Sppb',
);
$this->menu=array(
	array('icon'=>'icon-edit','label'=>'Buat Sppb', 'url'=>array('create')),
	array('icon'=>'icon-cog','label'=>'Manage Sppb', 'url'=>array('admin')),
	array('icon'=>'icon-eye-open','label'=>'Daftar Update Sppb', 'url'=>array('InUpdate')),
	array('icon'=>'icon-search','label'=>'Rekap Sppb', 'url'=>array('Laporan')),
	//array('icon'=>'icon-signal','label'=>'Lihat Statistik Permintaan', 'url'=>array('Chart')),
);

?>

<h1>Lihat Sppb</h1>
<h5>Klik Id untuk Lihat lebih detail</h5>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
