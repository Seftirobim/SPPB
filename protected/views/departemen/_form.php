<?php
/* @var $this LoginController */
/* @var $model Login */
/* @var $form CActiveForm */
?>
<style type="text/css">
  .well{
  background-image:url('../themes/bootstrap/css/wild_flowers.png');
  border-width: 1px;
  border-color: green;
}
</style>

<div class="well" align="center">
<h1 >Operasi</h1>
<br>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View Departemen',
    'type'=>'info',
    'icon'=>'icon-eye-open',
   'url'=>'/indo_everest/Departemen',
   'htmlOptions'=>array(
   	  'title'=>'Melihat Data Departemen'),
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update Departemen',
    'type'=>'info',
    'icon'=>'icon-eye-open',
   'url'=>'/indo_everest/Departemen/InUpdate',
   'htmlOptions'=>array(
   	  'title'=>'Melihat Daftar Departemen'),
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage Departemen',
    'type'=>'danger',
    'icon'=>'icon-cog',
   'url'=>'/indo_everest/Departemen/admin',
   'htmlOptions'=>array(
   	  'title'=>'Mengatur Data Departemen'),
)); ?>
</div>
<div class="well">
  <div class="form">
<h1>Buat Master Departemen</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
  'type'=>'vertical',
  'id'=>'departemen-form',
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
  
    <?php echo $form->labelEx($model,'kode_dept'); ?>
    <?php echo $form->textField($model,'kode_dept',array('style'=>'width:80px;')); ?>
    <?php echo $form->error($model,'kode_dept'); ?>
  

  
    <?php echo $form->labelEx($model,'nama_dept'); ?>
    <?php echo $form->textField($model,'nama_dept',array('size'=>50,'maxlength'=>50)); ?>
    <?php echo $form->error($model,'nama_dept'); ?>
</fieldset> 

<div>

    <?php 
    echo "<br>";
    $this->widget('bootstrap.widgets.TbButton',array(
      'buttonType'=>'submit',
      'icon'=>'icon-pencil',
      'type'=> $model->isNewRecord ? 'primary' : 'primary',
      'label'=>$model->isNewRecord ? 'Create' : 'Save',
      'block'=>false,
      ));
    
    echo "&nbsp";
    $this->widget('bootstrap.widget.TbButton',array(
      'buttonType'=>'reset',
      'type'=>'danger',
      'icon'=>'icon-repeat',
      'block'=>false,
      'label'=>'Reset',
      'url'=>'index.php?r=departemen',
      ));
    //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>