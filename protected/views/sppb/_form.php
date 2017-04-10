<?php
/* @var $this SppbController */
/* @var $model Sppb */
/* @var $form CActiveForm */
?>
<?php //$this->endWidget('zii.widgets.jui.CJuiDialog'); ?>



<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal',
'htmlOptions' => array('style' => 'width: 800px; margin-left: -400px'),)); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Tambah SPPB</h4>
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
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'View SPPB',
    'type'=>'info',
    'icon'=>'icon-eye-open',
   'url'=>'/contoh/index.php?r=Sppb',
)); ?>

&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'List Update SPPB',
    'type'=>'info',
    'icon'=>'icon-eye-open',
   'url'=>'/contoh/index.php?r=Sppb/InUpdate',
)); ?>
&nbsp
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Manage SPPB',
    'type'=>'danger',
    'icon'=>'icon-cog',
   'url'=>'/contoh/index.php?r=Sppb/admin',
)); ?>

<div class="form">

	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'sppb-form',
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
		<table border="0" cellpadding="7" style="border-color:#184480;width:100%">
		<tr>
			<td width="70%">
			<?php echo $form->labelEx($model,'kode_dept'); ?>
			<?php echo $form->textField($model,'kode_dept',array('size'=>30,'id'=>'kode_dept','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
			<?php 
			//echo $form->hiddenField($model,'kode_dept');
			//echo CHtml::textField('kode_dept','',array('size'=>60));

			echo CHtml::ajaxbutton('Cari ',Yii::app()->createUrl('Sppb/GetDepartemen'),
				array('update'=>'#kode_field'),array("id"=>'kode_dept'),array('class'=>'glyphicon glyphicon-search'));
			 ?>
			 <div id="kode_field" style="visibility:hidden;"></div>
			<?php echo $form->error($model,'kode_dept'); ?>
			</td>
		
			<td>
			<?php echo $form->labelEx($model,'permintaan_dept'); ?>
			<?php echo $form->textField($model,'permintaan_dept',array('size'=>30,'maxlength'=>30,'id'=>'nama_dept','readonly'=>'true',)); ?>
			<?php echo $form->error($model,'permintaan_dept'); ?>
			</td>

			<td>
			<?php echo $form->labelEx($model,'gudang_tujuan'); ?>
			<?php echo $form->textField($model,'gudang_tujuan',array('size'=>30,'id'=>'nama_gudang','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
			<?php 
			//echo $form->hiddenField($model,'kode_dept');
			//echo CHtml::textField('kode_dept','',array('size'=>60));

			echo CHtml::ajaxbutton('Cari',Yii::app()->createUrl('Sppb/Getgudang'),
				array('update'=>'#kode_field'),array("id"=>'gudang_tujuan'));
			 ?>
			 <div id="kode_field" style="visibility:hidden;"></div>
			<?php echo $form->error($model,'gudang_tujuan'); ?>
			</td>

			
		</tr>
		<tr>
			<td  width="70%">
			<?php echo $form->labelEx($model,'no_sppb'); ?>
			<?php echo $form->textField($model,'no_sppb',array(
			'size'=>5,'value'=>(($model->isNewRecord)? $model->generateCode() : $model->no_sppb),'readonly'=>'true')); ?>
			<?php echo $form->error($model,'no_sppb'); ?>
			</td>
		
			<td colspan="">

			<?php echo $form->labelEx($model,'tgl_SPPB'); ?>
			<?php 
			$properties = array(
				'model'=>$model,
				'attribute'=>'tlg_sppb',
				'options'=>array(
					'showAnim'=>'fold',
					'dateFormat'=>'yy-mm-dd'
					),
				'htmlOptions'=>array(
					'style'=>'height:20px;width:80px',
					),
				);
			$this->widget('zii.widgets.jui.CjuiDatePicker',$properties);
			?>
			<?php echo $form->error($model,'tlg_sppb'); ?>
			
			</td>
			
			<td>	
			
			</td>
		</tr>
		<tr>

			<td  width="70%">
			<?php echo $form->labelEx($model,'kd_barang'); ?>
			<?php echo $form->textField($model,'kd_barang',array('size'=>30,'id'=>'kode_barang','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
			<?php 
			//echo $form->hiddenField($model,'kode_dept');
			//echo CHtml::textField('kode_dept','',array('size'=>60));

			echo CHtml::ajaxbutton('Cari',Yii::app()->createUrl('Sppb/GetBarang'),
				array('update'=>'#kode_field'),array("id"=>'kode_barang'));
			 ?>
			 <div id="kode_field" style="visibility:hidden;"></div>
			<?php echo $form->error($model,'kd_barang'); ?>
			
			</td>

			<td>
			<?php echo $form->labelEx($model,'nm_barang'); ?>
			<?php echo $form->textField($model,'nm_barang',array('size'=>30,'maxlength'=>30,'id'=>'nama_barang','readonly'=>'true')); ?>
			<?php echo $form->error($model,'nm_barang'); ?>
			</td>

			

			<td>
			<?php echo $form->labelEx($model,'satuan'); ?>
			<?php echo $form->dropDownList($model,'satuan',$model->getSatuan(),array(
			'prompt'=>'Pilih Satuan','style'=>'width:200px')); ?>
			<?php echo $form->error($model,'satuan'); ?>
			</td>					


		</tr>
		<tr>
			<td width="70%" >
			<?php echo $form->labelEx($model,'qty_request'); ?>
			<?php echo $form->textField($model,'qty_request'); ?>
			<?php echo $form->error($model,'qty_request'); ?>
			</td>
			<td>
			<?php echo $form->labelEx($model,'qty_realisasi'); ?>
			<?php echo $form->textField($model,'qty_realisasi'); ?>
			<?php echo $form->error($model,'qty_realisasi'); ?>
			</td>
			
			<td colspan="2">
			<?php echo $form->labelEx($model,'keterangan'); ?>
			<?php echo $form->textArea($model,'keterangan',array('rows'=>5, 'cols'=>50,'class'=>'span5')); ?>
			<?php echo $form->error($model,'keterangan'); ?>
			</td>
			
		</tr>
		</table>
		 <div class="row">
		
	</fieldset>

	<div class="form-actions">
			<?php 
			
			$this->widget('bootstrap.widgets.TbButton',array(
				'buttonType'=>'submit',
				'icon'=>'icon-pencil',
				'type'=> $model->isNewRecord ? 'primary' : 'primary',
				'label'=>$model->isNewRecord ? 'Create' : 'Save',
				'block'=>true,
				));
			

			$this->widget('bootstrap.widget.TbButton',array(
				'buttonType'=>'reset',
				'type'=>'danger',
				'icon'=>'icon-repeat',
				'block'=>true,
				'label'=>'Reset',
				
				));
			//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>
		
			
		

	<?php $this->endWidget(); ?>

	</div><!-- form -->

</br>
</br>
</br>

