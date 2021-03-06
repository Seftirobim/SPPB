<?php
/* @var $this LoginController */
/* @var $model Login */
/* @var $form CActiveForm */
?>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4 style="color:white">Update User</h4>
</div>
 
<div class="modal-body">
  <div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'type'=>'vertical',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<fieldset>
	<legend></legend>
	
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'user'); ?>
	

	
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'password'); ?>
	

</fieldset>
	

	<div>
	<center>
		<?php 
		echo "<br>";
		$this->widget('bootstrap.widgets.TbButton',array(
			'buttonType'=>'submit',
			'type'=> $model->isNewRecord ? 'primary' : 'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
			'block'=>false,
			));
		
		echo "&nbsp&nbsp";
		$this->widget('bootstrap.widget.TbButton',array(
			'buttonType'=>'reset',
			'type'=>'danger',

			'block'=>false,
			'label'=>'Reset',
			
			));
		//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</center>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
 
<div class="modal-footer">
    <?php //$this->widget('bootstrap.widgets.TbButton', array(
        //'type'=>'primary',
      //  'label'=>'Save changes',
      //  'url'=>'#',
       // 'htmlOptions'=>array('data-dismiss'=>'modal'),
    //)); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Kembali',
    'type'=>'success',
 'url'=>'/indo_everest/index.php?r=login/create',
)); ?>
&nbsp

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Update User',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View User',
    'type'=>'info',
   'url'=>'/indo_everest/index.php?r=login',
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update User',
    'type'=>'info',
   'url'=>'/indo_everest/index.php?r=login/InUpdate',
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage User',
    'type'=>'danger',
   'url'=>'/indo_everest/index.php?r=login/admin',
)); ?>


</br>
</br>
</br>

</br>
</br>
</br>

</br>
</br>
</br>

</br>
</br>
</br>

</br>
</br>
</br>



