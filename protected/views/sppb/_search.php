<?php
/* @var $this SppbController */
/* @var $model Sppb */
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
		<?php echo $form->label($model,'gudang_tujuan'); ?>
		<?php echo $form->textField($model,'gudang_tujuan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sppb'); ?>
		<?php echo $form->textField($model,'no_sppb',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tlg_sppb'); ?>
		<?php echo $form->textField($model,'tlg_sppb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_barang'); ?>
		<?php echo $form->textField($model,'nm_barang',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satuan'); ?>
		<?php echo $form->textField($model,'satuan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_barang'); ?>
		<?php echo $form->textField($model,'kd_barang',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty_request'); ?>
		<?php echo $form->textField($model,'qty_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty_realisasi'); ?>
		<?php echo $form->textField($model,'qty_realisasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->