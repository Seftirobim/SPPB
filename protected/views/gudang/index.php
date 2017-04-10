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
/* @var $this GudangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gudangs',
);

$this->menu=array(
	array('icon'=>'icon-cog','label'=>'Manage Gudang', 'url'=>array('admin')),
	array('icon'=>'icon-arrow-left','label'=>'Kembali', 'url'=>array('create')),
);
?>

<h1>Daftar Master Gudang</h1>
<h5 id="color">Silahkan Memilih ID untuk Lebih Detail</h5>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
