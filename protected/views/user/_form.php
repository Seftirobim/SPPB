<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="well" align="center">
<h1 >Operasi</h1>
<br>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View User',
    'type'=>'info',
    'icon'=>'icon-eye-open',
   'url'=>'/indo_everest/User',
   'htmlOptions'=>array(
   	  'title'=>'Melihat Data User'),
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage User',
    'type'=>'danger',
    'icon'=>'icon-cog',
   'url'=>'/indo_everest/User/admin',
   'htmlOptions'=>array(
   	  'title'=>'Mengatur Data User'),
)); ?>
</div>
<div class="well">
<div class="form">
<h1>Buat User</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveform', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields dengan <span class="required">*</span> harus disi.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('style'=>'width:150px;','maxlength'=>30)); ?>
		<?php echo $form->error($model,'username'); ?>

		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('style'=>'width:150px;','maxlength'=>30)); ?>
		<?php echo $form->error($model,'password'); ?>

		<?php echo $form->labelEx($model,'level_id'); ?>
		<?php echo $form->dropDownList($model,'level_id',$model->level(),array('prompt'=>'-=pilih level=-','style'=>'width:150px;')); ?>
		<?php echo $form->error($model,'level_id'); ?>

<!-- 	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div -->

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