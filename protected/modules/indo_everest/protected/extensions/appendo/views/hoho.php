<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'sppb-form',
		'type'=>'vertical',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		)); ?>


<table border="1" class="appendo-gii" id="<?php echo $id ?>">

		

		<?php  if ($model->kd_barang == null): ?>

		<tr>

			<td  width="70%">
			<?php echo $form->labelEx($model,'kd_barang'); ?>
			<?php echo $form->textField($model,'kd_barang[]',array('size'=>30,'id'=>'kode_barang','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
			<?php 
			//echo $form->hiddenField($model,'kode_dept');
			//echo CHtml::textField('kode_dept','',array('size'=>60));

			echo CHtml::ajaxbutton('Cari',Yii::app()->createUrl('Sppb/GetBarang'),
				array('update'=>'#kode_field'),array("id"=>'kode_barang[]'));
			 ?>
			 <div id="kode_field" style="visibility:hidden;"></div>
			<?php echo $form->error($model,'kd_barang'); ?>
			
			</td>

			<td>
			<?php echo $form->labelEx($model,'nm_barang'); ?>
			<?php echo $form->textField($model,'nm_barang[]',array('size'=>30,'maxlength'=>30,'id'=>'nama_barang','readonly'=>'true')); ?>
			<?php echo $form->error($model,'nm_barang'); ?>
			</td>

			

			<td>
			<?php echo $form->labelEx($model,'satuan'); ?>
			<?php echo $form->dropDownList($model,'satuan[]',$model->getSatuan(),array(
			'prompt'=>'Pilih Satuan','style'=>'width:200px')); ?>
			<?php echo $form->error($model,'satuan'); ?>
			</td>	

			<td width="70%" >
			<?php echo $form->labelEx($model,'qty_request'); ?>
			<?php echo $form->textField($model,'qty_request[]'); ?>
			<?php echo $form->error($model,'qty_request'); ?>
			</td>
			<td>
			<?php echo $form->labelEx($model,'qty_realisasi'); ?>
			<?php echo $form->textField($model,'qty_realisasi[]'); ?>
			<?php echo $form->error($model,'qty_realisasi'); ?>
			</td>
			
			<td colspan="2">
			<?php echo $form->labelEx($model,'keterangan'); ?>
			<?php echo $form->textArea($model,'keterangan[]',array('rows'=>5, 'cols'=>50,'class'=>'span5')); ?>
			<?php echo $form->error($model,'keterangan'); ?>
			</td>				


		</tr>
		
			
			
		

	<?php else: ?>
		  <?php for($i = 0; $i < sizeof($model->kd_barang); ++$i): 
		//  foreach ($model as $value) {
		  ?>	

		<tr>

			<td  width="70%">
			<?php echo $form->labelEx($model,'kd_barang'); ?>
			<?php echo $form->textField($model,'kd_barang[]',$model->kd_barang[$i],array('size'=>30,'id'=>'kode_barang','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
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
			<?php echo $form->textField($model,'nm_barang[]',$model->nm_barang[$i],array('size'=>30,'maxlength'=>30,'id'=>'nama_barang','readonly'=>'true')); ?>
			<?php echo $form->error($model,'nm_barang'); ?>
			</td>

			

			<td>
			<?php echo $form->labelEx($model,'satuan'); ?>
			<?php echo $form->dropDownList($model,'satuan[]',$model->satuan[$i],$model->getSatuan(),array(
			'prompt'=>'Pilih Satuan','style'=>'width:200px')); ?>
			<?php echo $form->error($model,'satuan'); ?>
			</td>	

			<td width="70%" >
			<?php echo $form->labelEx($model,'qty_request'); ?>
			<?php echo $form->textField($model,'qty_request[]',$model->qty_request[$i]); ?>
			<?php echo $form->error($model,'qty_request'); ?>
			</td>
			<td>
			<?php echo $form->labelEx($model,'qty_realisasi'); ?>
			<?php echo $form->textField($model,'qty_realisasi[]',$model->qty_realisasi[$i]); ?>
			<?php echo $form->error($model,'qty_realisasi'); ?>
			</td>
			
			<td colspan="2">
			<?php echo $form->labelEx($model,'keterangan'); ?>
			<?php echo $form->textArea($model,'keterangan[]',$model->keterangan[$i],array('rows'=>5, 'cols'=>50,'class'=>'span5')); ?>
			<?php echo $form->error($model,'keterangan'); ?>
			</td>				


		</tr>
		
			
			
		
	<?php endfor; ?>
		<?php// } ?>


		<tr>

			<td  width="70%">
			<?php echo $form->labelEx($model,'kd_barang'); ?>
			<?php echo $form->textField($model,'kd_barang[]',array('size'=>30,'id'=>'kode_barang','readonly'=>'true','placeholder'=>'Klik Cari Untuk Mencari')); ?>
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
			<?php echo $form->textField($model,'nm_barang[]',array('size'=>30,'maxlength'=>30,'id'=>'nama_barang','readonly'=>'true')); ?>
			<?php echo $form->error($model,'nm_barang'); ?>
			</td>

			

			<td>
			<?php echo $form->labelEx($model,'satuan'); ?>
			<?php echo $form->dropDownList($model,'satuan[]',$model->getSatuan(),array(
			'prompt'=>'Pilih Satuan','style'=>'width:200px')); ?>
			<?php echo $form->error($model,'satuan'); ?>
			</td>	

			<td width="70%" >
			<?php echo $form->labelEx($model,'qty_request'); ?>
			<?php echo $form->textField($model,'qty_request[]'); ?>
			<?php echo $form->error($model,'qty_request'); ?>
			</td>
			<td>
			<?php echo $form->labelEx($model,'qty_realisasi'); ?>
			<?php echo $form->textField($model,'qty_realisasi[]'); ?>
			<?php echo $form->error($model,'qty_realisasi'); ?>
			</td>
			
			<td colspan="2">
			<?php echo $form->labelEx($model,'keterangan'); ?>
			<?php echo $form->textArea($model,'keterangan[]',array('rows'=>5, 'cols'=>50,'class'=>'span5')); ?>
			<?php echo $form->error($model,'keterangan'); ?>
			</td>				


		</tr>
		
			
			
		
	<?php  endif;?>
</table>

		<div class="form-actions">
			<?php 
			
			$this->widget('bootstrap.widgets.TbButton',array(
				'buttonType'=>'submit',
				'type'=> $model->isNewRecord ? 'primary' : 'primary',
				'label'=>$model->isNewRecord ? 'Create' : 'Save',
				'block'=>true,
				));
			

			$this->widget('bootstrap.widget.TbButton',array(
				'buttonType'=>'reset',
				'type'=>'danger',

				'block'=>true,
				'label'=>'Reset',
				
				));
			//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>

<?php $this->endWidget(); ?>