
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/ckeditor/ckeditor.js"></script>
<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>
<div class="well">
<div class="form">
<h1>Buat Permintaan</h1>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permintaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'no_per'); ?>
		<?php echo $form->textField($model,'no_per',array(
			'readonly'=>'true',
			'size'=>5)); ?>
		<?php echo $form->error($model,'no_per'); ?>


		<?php //echo $form->labelEx($model,'nama_dept'); ?>
		<?php //echo $form->textField($model,'nama_dept',array('readonly'=>'true','style'=>'width:150px;')); ?>
		<?php 
		// echo $form->dropDownList($model,'nama_dept',$this->getNamaDept(),array(
		// 'prompt'=>'Pilih Nama Departemen','style'=>'width:200px;')); 
		?>
		<?php //echo $form->error($model,'nama_dept'); ?>



		<?php //echo $form->labelEx($model,'tgl'); ?>
		<?php //echo $form->textField($model,'tgl',array('style'=>'width:90px;')); 
		//echo $form->textField($model,'tgl',array(
			// 'style'=>'width:200px',
			// 'readonly'=>'true',	
			// 'size'=>5,'value'=>(($model->isNewRecord)? $model->getTanggal() : $model->tgl)));
		?>

		<?php //echo $form->error($model,'tgl'); ?>
	

		<?php //echo $form->labelEx($model,'message'); ?>
		<?php //echo $form->textArea($model,'message',array('rows'=>5, 'cols'=>50,'class'=>'span5')); ?>
		<?php //echo $form->error($model,'message'); ?>

		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textArea($model,'status',array('rows'=>2, 'cols'=>10)); ?>
		<?php echo $form->error($model,'status'); ?>
	

		<div>
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); 
		$this->widget('bootstrap.widgets.TbButton',array(
				'buttonType'=>'submit',
				'icon'=>'icon-pencil',
				'type'=> $model->isNewRecord ? 'primary' : 'primary',
				'label'=>$model->isNewRecord ? 'Create' : 'Save',
				'block'=>false,
				));
			
			echo "&nbsp&nbsp&nbsp";
			$this->widget('bootstrap.widget.TbButton',array(
				'buttonType'=>'reset',
				'type'=>'danger',
				'icon'=>'icon-repeat',
				'block'=>false,
				'label'=>'Reset',
				
				));
		?>
		</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>