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
<style>
.alert{
	font-size: 30px;
}
</style>
<div id ="header">Selamat Datang Di Aplikasi Pembuatan SPPB<br></div>

<?php /* $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Selamat Datang  Di '.CHtml::encode(Yii::app()->name),

)); */?>
 <br>
 <?php  Yii::app()->user->setFlash('info', '<strong>Silahkan Login Untuk Memulai Aplikasi Ini</strong> ');?>

<?php //$this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success','info'),
    )); ?>

	

<?php /*$this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'images/1.jpg', 'label'=>'Stay Focus', 'caption'=>'Stay Fokus Lah Broo.'),
        array('image'=>'images/2.jpg', 'label'=>'Work Hard Dream Big', 'caption'=>'Harus Bekerja Keras Bermimpi Besar.'),
        array('image'=>'images/3.jpg', 'label'=>'Imaji', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); */ ?>


