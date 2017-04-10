<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>



		<?php echo $form->label($model,'nama_dept'); ?>
		<?php echo $form->textField($model,'nama_dept',array('size'=>30,'maxlength'=>30)); ?>


	
		<?php echo $form->label($model,'tgl'); ?>
		<?php echo $form->textField($model,'tgl'); ?>
	

	
		<?php echo $form->label($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>


	<div>
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->