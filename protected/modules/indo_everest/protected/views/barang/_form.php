	<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4 style="color:white">Tambah Barang</h4>
</div>
 
<div class="modal-body">
	<div class="form">

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
			<?php echo $form->textField($model,'kode_barang',array(
			'size'=>5,'value'=>(($model->isNewRecord)? $model->generateCode() : $model->kode_barang),'readonly'=>'true')); ?>
			<?php echo $form->error($model,'kode_barang'); ?>
	

			
			<?php echo $form->labelEx($model,'nama_barang'); ?>
			<?php echo $form->textField($model,'nama_barang',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'nama_barang'); ?>
	</fieldset>
		<div >
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
				//'url'=>'index.php?r=barang',
				));
					?>
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
    'label'=>'Tambah Baru',
    'type'=>'primary',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View Barang',
    'type'=>'info',
   'url'=>'/indo_everest/index.php?r=Barang',
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update Barang',
    'type'=>'info',
   'url'=>'/indo_everest/index.php?r=Barang/InUpdate',
)); ?>
&nbsp

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage Barang',
    'type'=>'danger',
   'url'=>'/indo_everest/index.php?r=Barang/admin',
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






