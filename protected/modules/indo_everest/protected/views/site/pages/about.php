<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Tentang Pengembang',
);
?>
<h1>Tentang Pengembang</h1>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me Please',
    'type'=>'info',
    'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'Aplikasi Ini Dibuat Oleh Sefti Robiansyah Mulyadi Untuk memenuhi salah satu persyaratan sidang tugas akhir.', 'rel'=>'popover'),
)); ?>

</br>
</br>
