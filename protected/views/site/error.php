<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error" style="font-size:20px; color:red">
<?php echo CHtml::encode($message); ?>
</div>
<br>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Kembali',
    'type'=>'success',
    'icon'=>'icon-circle-arrow-left',
   'url'=>'/indo_everest/index.php',
)); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>