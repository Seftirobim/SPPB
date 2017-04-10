<?php
/* @var $this Sppb2Controller */
/* @var $model Sppb2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_dept'); ?>
		<?php echo $form->textField($model,'kode_dept',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permintaan_dept'); ?>
		<?php echo $form->textField($model,'permintaan_dept',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_gudang'); ?>
		<?php echo $form->textField($model,'kode_gudang',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sppb'); ?>
		<?php echo $form->textField($model,'no_sppb',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_sppb'); ?>
		<?php echo $form->textField($model,'tgl_sppb'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'tgl_sppb'); ?>
		<?php echo $form->textField($model,'year'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->