

<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/loading.js');
?>

<div id="hidden">
<div id="progress-bar"></div>
</div>
<div id="loadings"></div>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div id ="header">Selamat Datang Di Aplikasi Pembuatan SPPB<br></div>
<html>
<body>
	
</body>
<?php 
/*
$this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Selamat Datang Di '.CHtml::encode(Yii::app()->name),
    'htmlOptions'=>array('styles'=>'font-size:10px'),)); */?>


 <!-- <p style="color:black">PT. INDO EVEREST TEXINDO adalah perusahan yang bergerak dalam bidang ...</p> -->
 <br>
<?php  Yii::app()->user->setFlash('success', 'Anda sebagai &nbsp'."<strong>".strtoupper(CHtml::encode(Yii::app()->user->name))."</strong>"."&nbspTelah Sukses Login" );   ?>
<?php  
// $model = Permintaan::model()->findAll(); //returns AR objects
// $count = count($model);
Yii::app()->user->setFlash('info', '<strong>Info!</strong> Silahkan Memilih Menu Diatas untuk Mengelola Data Master');

?>
<?php //$this->endWidget(); ?>
 <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success','info'),
    )); ?>
 
<?php

?>
</html>





