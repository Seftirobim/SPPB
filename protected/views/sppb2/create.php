
<?php
/* @var $this Sppb2Controller */
/* @var $model Sppb2 */

$this->breadcrumbs=array(
	'Sppb'=>array('index'),
	'Buat Sppb',
);

//$this->menu=array(
//	array('label'=>'List Sppb2', 'url'=>array('index')),
//	array('label'=>'Manage Sppb2', 'url'=>array('admin')),
//);
?>
<div class="well" align="center">
<h3 style="color:green">Operations</h3>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View SPPB',
    'type'=>'info',
    'icon'=>'icon-eye-open',
    'url'=>'/indo_everest/Sppb2',
    'htmlOptions' => array(
          'title' => 'Melihat Data SPPB',),
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update SPPB',
    'type'=>'info',
    'icon'=>'icon-eye-open',
    'url'=>'/indo_everest/Sppb2/InUpdate',
    'htmlOptions' => array(
          'title' => 'Melihat Daftar Update',),
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage SPPB',
    'type'=>'danger',
    'icon'=>'icon-cog',
    'url'=>'/indo_everest/Sppb2/admin',
    'htmlOptions' => array(
          'title' => 'Mengatur Data SPPB',),
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Rekap SPPB',
    'type'=>'biasa',
    'icon'=>'icon-search',
    'url'=>'/indo_everest/Sppb2/laporan',
    'htmlOptions' => array(
          'title' => 'Merekap Data SPPB',),
)); ?>
&nbsp
<?php 
// $this->widget('bootstrap.widgets.TbButton', array(
//     'label'=>'Lihat Statistik Permintaan',
//     'type'=>'biasa',
//     'icon'=>'icon-signal',
//     'url'=>'/indo_everest/Sppb2/chart',
//     'htmlOptions' => array(
//           'title' => 'Melihat Statistik Permintaan',),
// )); 
?>
</br>
</div>



<?php $this->renderPartial('_form', array(
	'model'=>$model,
	'barangs'=>$barangs
	)); ?>

