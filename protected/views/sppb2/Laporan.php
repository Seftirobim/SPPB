<script>
function myFunction() {
    var myWindow = window.open("laporan");
}
</script>
<?php
$this->breadcrumbs=array(
	'Sppb'=>array('index'),
	'Laporan',
);
?>
<?php
$this->menu=array(
	array('icon'=>'icon-eye-open','label'=>'Daftar Sppb', 'url'=>array('index')),
	array('icon'=>'icon-edit','label'=>'Create Sppb', 'url'=>array('create')),
	array('icon'=>'icon-cog','label'=>'Manage Sppb', 'url'=>array('admin')),
	array('icon'=>'icon-eye-open','label'=>'List Update', 'url'=>array('InUpdate')),
);
?>


<?php  Yii::app()->user->setFlash('info', '<strong>Info!</strong> Silahkan Isi Field di atas sesuai contoh');?>
 <!-- <p style="color:black">PT. INDO EVEREST TEXINDO adalah perusahan yang bergerak dalam bidang ...</p> -->

  <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'fade'=>true,
        'closeText'=>'&times;',
        'alerts'=>array('danger','success','info'),
    )); ?>

<h4>Silahkan Cari Laporan SPPB / Tahun & Bulan</h4>

<div class="well">
<div class="form">
<?php
 $form = $this->beginWidget('bootstrap.widgets.TbActiveForm',array(
 	'id'=>'Sppb2-form',
 	'enableAjaxValidation'=>false,
 )); ?>

 	<?php echo $form->errorSummary($model); ?>

 	
 	<?php echo $form->labelEx($model,'Isi Tahun Dan Bulan');?>
 	<?php echo $form->textField($model,'year',array('placeholder'=>'Contoh : 15-01'));?>
 	<?php echo $form->error($model,'year');?>
 	

 	
 	
 	<br>
 	<br>
 	<div >
 	
		<?php 
		
		$this->widget('bootstrap.widgets.TbButton',array(
			'buttonType'=>'submit',
			'type'=> 'primary',
			'label'=>'Cetak pdf',
			'block'=>false,
			'icon'=>'icon-print',
			'htmlOptions' => array(
        	'title' => 'Cetak Ke PDF',
        	'onClick'=>'myFunction()',),

			));
		
		echo "&nbsp";
		$this->widget('bootstrap.widget.TbButton',array(
			'buttonType'=>'reset',
			'type'=>'danger',
			'icon'=>'icon-repeat',
			'block'=>false,
			'label'=>'Reset',
			
			));
		//echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');  ?>

	</div>
<?php $this->endWidget(); ?>

</div> <!-- form -->
</div>

<?php if ($lapor): ?>

	<h1>Pilih Id Untuk Lihat Detail</h1>
	<table class ="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Kode Departemen</th>
				<th>Permintaan Departemen</th>
				<th>Gudang Tujuan</th>
				<th>No Sppb</th>
				<th>Tanggal Sppb</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Satuan</th>
				<th>Qty Request</th>
				<th>Qty Realisasi</th>
				<th>Keterangan</th>
					
			</tr>
			
		</thead>

		<tbody>
			<?php foreach ($lapor as $lapors) :?>
			<tr>
				<td> <?php echo CHtml::link(CHtml::encode($lapors->id), array('view', 'id'=>$lapors->id)); ?></td>
				<td>  <?php echo $lapors->kode_dept ;?> </td>
				<td>  <?php echo $lapors->permintaan_dept ;?> </td>
				<td>  <?php echo $lapors->kode_gudang ;?> </td>
				<td>  <?php echo $lapors->no_sppb; ?> </td>
				<td>  <?php echo $lapors->tgl_sppb ;?> </td>

					<?php foreach ($lapors->barangs as $lipirs) :?>
						<td>  <?php echo $lipirs->kd_brg;?> </td>
						<td>  <?php echo $lipirs->nm_barang ;?> </td>
						<td>  <?php echo $lipirs->satuan ;?> </td>
						<td>  <?php echo $lipirs->qty_request; ?> </td>
						<td>  <?php echo $lipirs->qty_realisasi ;?> </td>
						<td>  <?php echo $lipirs->keterangan ;?> </td>
					
					<?php endforeach;?>

			<?php endforeach;?>
			</tr>
			
		</tbody>
	</table>


<?php elseif($lapor==null): ?>

 <br>
 aa
 <br>
<?php else:?>
	aa

 <?php endif; ?>