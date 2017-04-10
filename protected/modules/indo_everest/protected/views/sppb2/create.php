<?php
/* @var $this Sppb2Controller */
/* @var $model Sppb2 */

$this->breadcrumbs=array(
	'Sppb2s'=>array('index'),
	'Create Sppb',
);

//$this->menu=array(
//	array('label'=>'List Sppb2', 'url'=>array('index')),
//	array('label'=>'Manage Sppb2', 'url'=>array('admin')),
//);
?>
<h3 style="color:green">Operations</h3>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View SPPB',
    'type'=>'info',
   'url'=>'/indo_everest/index.php?r=Sppb2',
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update SPPB',
    'type'=>'info',
   'url'=>'/indo_everest/index.php?r=Sppb2/InUpdate',
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage SPPB',
    'type'=>'danger',
   'url'=>'/indo_everest/index.php?r=Sppb2/admin',
)); ?>
</br>


<h1>Buat Sppb</h1>

<?php $this->renderPartial('_form', array(
	'model'=>$model,
	'barangs'=>$barangs
	)); ?>