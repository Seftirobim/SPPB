
<?php
/* @var $this BarangController */
/* @var $model Barang */
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

<div class="well" align="center">
<h1 align="center">Operasi</h1>
<br>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Buat Master Barang',
    'icon'=>'icon-pencil',
    'type'=>'primary',
    'url'=>'/indo_everest/Barang/create',
    'htmlOptions'=>array(
   	  'title'=>'Membuar Data Master Barang'),
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View Barang',
    'icon'=>'icon-eye-open',
    'type'=>'info',
    'url'=>'/indo_everest/Barang',
    'htmlOptions'=>array(
   	  'title'=>'Melihat Data Barang'),
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update Barang',
    'icon'=>'icon-eye-open',
    'type'=>'info',
   'url'=>'/indo_everest/Barang/InUpdate',
   'htmlOptions'=>array(
   	  'title'=>'Melihat Daftar Update Barang'),
)); ?>
&nbsp

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage Barang',
    'icon'=>'icon-cog',
    'type'=>'danger',
   'url'=>'/indo_everest/Barang/admin',
   'htmlOptions'=>array(
   	  'title'=>'Mengatur Data Barang'),
)); ?>
</div>
<div class="well">
<div class="form">
<h1>Update Master Barang ID : <?php echo $model->id?></h1>
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'barang-form',
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

	
			<?php echo $form->labelEx($model,'kode_barang'); ?>
			<?php /*echo $form->textField($model,'kode_barang',array(
			'readonly'=>'true',
			'size'=>5,'value'=>$this->generateCode())); */?>
			<?php echo $form->textField($model,'kode_barang',array('style'=>'width:80px;')); ?>
			<?php echo $form->error($model,'kode_barang'); ?>
	

			
			<?php echo $form->labelEx($model,'nama_barang'); ?>
			<?php echo $form->textField($model,'nama_barang',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'nama_barang'); ?>

			<?php echo $form->labelEx($model,'satuan'); ?>
			<?php echo $form->textField($model,'satuan',array('style'=>'width:80px;')); ?>
			<?php echo $form->error($model,'satuan'); ?>

	</fieldset>
		<div >
		
			<?php 
			echo "<br>";
			$this->widget('bootstrap.widgets.TbButton',array(
				'buttonType'=>'submit',
				'type'=> $model->isNewRecord ? 'primary' : 'primary',
				'label'=>$model->isNewRecord ? 'Create' : 'Save',
				'block'=>false,
				'icon'=>'icon-pencil',
				));
			echo "&nbsp&nbsp";

			$this->widget('bootstrap.widget.TbButton',array(
				'buttonType'=>'reset',
				'type'=>'danger',
				'icon'=>'icon-repeat',
				'block'=>false,
				'label'=>'Reset',
				//'url'=>'index.php?r=barang',
				));
					?>
		
		</div>	

	
	<?php $this->endWidget(); ?>

	</div><!-- form -->
</div>






