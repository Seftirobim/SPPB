<?php
/* @var $this Sppb2Controller */
/* @var $model Sppb2 */

$this->breadcrumbs=array(
	'Sppb2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

// $this->menu=array(
// 	array('icon'=>'icon-eye-open','label'=>'Daftar Sppb', 'url'=>array('index')),
// 	array('icon'=>'icon-edit','label'=>'Create Sppb', 'url'=>array('create')),
// 	array('icon'=>'icon-eye-open','label'=>'View Sppb', 'url'=>array('view', 'id'=>$model->id)),
// 	array('icon'=>'icon-cog','label'=>'Manage Sppb', 'url'=>array('admin')),
// 	array('icon'=>'icon-search','label'=>'Rekap Sppb', 'url'=>array('Laporan')),
// );
?>

<div class="well" align="center">
<h1>Operasi</h1>
<br>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Buat SPPB',
    'type'=>'primary',
    'icon'=>'icon-pencil',
    'url'=>'/indo_everest/Sppb2/create',
    'htmlOptions' => array(
          'title' => 'Membuat Data SPPB',),
)); ?>
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


<?php $this->renderPartial('_firm', array(
	'model'=>$model, 
	'barangs' => $barangs
	)); ?>