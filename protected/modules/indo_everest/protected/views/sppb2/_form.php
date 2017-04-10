<?php
/* @var $this Sppb2Controller */
/* @var $model Sppb2 */
/* @var $form CActiveForm */
?>




<div class="form">
<?php  $form = $this->beginWidget('DynamicTabularForm',array(
	'id'=>'sppb2-form',
	'defaultRowView'=>'_barang_form',
	'enableAjaxValidation'=>false,
	)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


		<?php echo $form->labelEx($model,'kode_dept'); ?>
		<?php echo $form->textField($model,'kode_dept',array('size'=>30,'id'=>'kode_dept','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
			<?php 
			//echo $form->hiddenField($model,'kode_dept');
			//echo CHtml::textField('kode_dept','',array('size'=>60));

			echo CHtml::ajaxbutton('Cari ',Yii::app()->createUrl('Sppb2/GetDepartemen'),
				array('update'=>'#kode_field'),array("id"=>'kode_dept'),array('class'=>'glyphicon glyphicon-search'));
			 ?>
			 <div id="kode_field" style="visibility:hidden;"></div>
			<?php echo $form->error($model,'kode_dept'); ?>



		<?php echo $form->labelEx($model,'permintaan_dept'); ?>
		<?php echo $form->textField($model,'permintaan_dept',array('size'=>30,'maxlength'=>30,'id'=>'nama_dept','readonly'=>'true',)); ?>
		<?php echo $form->error($model,'permintaan_dept'); ?>



		<?php echo $form->labelEx($model,'gudang_tujuan'); ?>
		<?php echo $form->textField($model,'gudang_tujuan',array('size'=>30,'id'=>'nama_gudang','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
			<?php 
			//echo $form->hiddenField($model,'kode_dept');
			//echo CHtml::textField('kode_dept','',array('size'=>60));

			echo CHtml::ajaxbutton('Cari',Yii::app()->createUrl('Sppb2/Getgudang'),
				array('update'=>'#kode_field'),array("id"=>'gudang_tujuan'));
			 ?>
			 <div id="kode_field" style="visibility:hidden;"></div>
			<?php echo $form->error($model,'gudang_tujuan'); ?>



		<?php echo $form->labelEx($model,'no_sppb'); ?>
		<?php echo $form->textField($model,'no_sppb',array(
			'size'=>5,'value'=>(($model->isNewRecord)? $model->generateCode() : $model->no_sppb),'readonly'=>'true')); ?>
			<?php echo $form->error($model,'no_sppb'); ?>



		<?php echo $form->labelEx($model,'tgl_sppb'); ?>
		<?php 
			$properties = array(
				'model'=>$model,
				'attribute'=>'tgl_sppb',
				'options'=>array(
					'showAnim'=>'slide',
					'dateFormat'=>'yy-mm-dd',
					'changeMonth'=>true,
					'changeYear'=>true,
					'showButtonPanel'=>true,
					),
				'htmlOptions'=>array(
					'style'=>'height:20px;width:80px',
					),
				);
			$this->widget('zii.widgets.jui.CjuiDatePicker',$properties);
			?>
			
			<?php echo $form->error($model,'tgl_sppb'); ?>

		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array(
		'size'=>5,'value'=>(($model->isNewRecord)? $model->getYear() : $model->year),'readonly'=>'true')); ?>
		<?php echo $form->error($model,'year'); ?>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php
			echo CHtml::ajaxbutton('Cari Kode Dan Nama Barang',Yii::app()->createUrl('Sppb2/GetBarang'),
				array('update'=>'#kode_field'),array("id"=>'aa'));
			?>
			 <div id="kode_field" style="visibility:hidden;"></div>



	</br>

	<div id="tabular-content">
		<?php echo $form->rowForm($barangs) ?>
		&nbsp
			<?php 
			
			$this->widget('bootstrap.widgets.TbButton',array(
				'buttonType'=>'submit',
				'type'=> $model->isNewRecord ? 'primary' : 'primary',
				'label'=>$model->isNewRecord ? 'Create' : 'Save',
				'block'=>false,
				));
			
			echo "&nbsp&nbsp&nbsp";
			$this->widget('bootstrap.widget.TbButton',array(
				'buttonType'=>'reset',
				'type'=>'danger',

				'block'=>false,
				'label'=>'Reset',
				
				));
			//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		
	</div>
			
	
<?php $this->endWidget(); ?>
</div><!-- form -->