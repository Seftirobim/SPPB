<?php
/* @var $this GudangController */
/* @var $model Gudang */
/* @var $form CActiveForm */
?>
<style type="text/css">
  .well{
  background-image:url('../themes/bootstrap/css/wild_flowers.png');
  border-width: 1px;
  border-color: green;
 

}
#center {
    margin: auto;
    width: 100%;
    
}
</style>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4 style="color:white">Tambah Master Gudang</h4>
</div>
 
<div class="modal-body">
	
	
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
<div class="well" align="center">
<h1>Operasi</h1>
<br>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Buat Master Gudang',
    'icon'=>'icon-pencil',
    'type'=>'primary',
   'url'=>'/indo_everest/Gudang/create',
   'htmlOptions'=>array(
   	  'title'=>'Membuat Data Master Gudang'),
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View Gudang',
    'icon'=>'icon-eye-open',
    'type'=>'info',
   'url'=>'/indo_everest/Gudang',
   'htmlOptions'=>array(
   	  'title'=>'Melihat Data Gudang'),
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update Gudang',
    'icon'=>'icon-eye-open',
    'type'=>'info',
   'url'=>'/indo_everest/Gudang/InUpdate',
   'htmlOptions'=>array(
   	  'title'=>'Melihat Daftar Gudang'),
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage Gudang',
    'icon'=>'icon-cog',
    'type'=>'danger',
   'url'=>'/indo_everest/Gudang/admin',
   'htmlOptions'=>array(
   	  'title'=>'Mengatur Data Gudang'),
)); ?>
</div>
<div class="well">
<div class="form">
<h1>Update Master Gudang ID : <?php echo $model->id;?></h1>
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'gudang-form',
		'type'=>'vertical',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

	
			<?php echo $form->labelEx($model,'kode_gudang'); ?>
			<?php echo $form->textField($model,'kode_gudang',array('style'=>'width:80px;')); ?>
			<?php echo $form->error($model,'kode_gudang'); ?>
	

	
			<?php echo $form->labelEx($model,'nama_gudang'); ?>
			<?php echo $form->textField($model,'nama_gudang',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'nama_gudang'); ?>

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
		
			echo "&nbsp&nbsp";
			$this->widget('bootstrap.widget.TbButton',array(
				'buttonType'=>'reset',
				'type'=>'danger',
				'icon'=>'icon-repeat',
				'block'=>false,
				'label'=>'Reset',
			
				));
			//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>
	

	<?php $this->endWidget(); ?>

	</div><!-- form -->
</div>




