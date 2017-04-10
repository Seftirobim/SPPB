<style type="text/css">
#color{
 	color: red;
 	font-family: 'Amaranth', sans-serif;
 }
</style>
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
	array('icon'=>'icon-cog','label'=>'Manage Departemen', 'url'=>array('admin')),
	array('icon'=>'icon-arrow-left','label'=>'Kembali', 'url'=>array('create')),
);
?>
<h1>Daftar Update Master Departemen</h1>
<h5 id="color">Silahkan Memilih Id Departemen Yang Ingin Diubah</h5>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viuw',

)); ?>
