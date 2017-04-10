<style>
#cari{
	text-align: center;
}
/* CSS for Zebra Table in index.html */
 .zebra-table {
 width: 100%;
 border-collapse: collapse;
 box-shadow: 0 2px 3px 1px #ddd;
 overflow: hidden;
 border:10px solid #383838;

 }
 .zebra-table th,.zebra-table td{
 vertical-align: top;
 padding:10px 7px;
 text-align: left;
 margin:0;

 }
 .zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
 background:#EAEAEA;

 }/* End CSS for Zebra Table in index.html */
</style>
<?php
$this->breadcrumbs=array(
	'Sppb'=>array('index'),
	'Laporan',
);
?>
<?php
$this->menu=array(
	array('icon'=>'icon-circle-arrow-left','label'=>'Kembali', 'url'=>array('Permintaan/Daftar'),'visible'=>Yii::app()->user->getLevel()=='2'),
);
?>


<?php  Yii::app()->user->setFlash('info', '<strong>Info!</strong> Silahkan Cari Status Pada Field Yang Sudah Disediakan ');?>
 <!-- <p style="color:black">PT. INDO EVEREST TEXINDO adalah perusahan yang bergerak dalam bidang ...</p> -->

  <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'fade'=>true,
        'closeText'=>'&times;',
        'alerts'=>array('danger','success','info'),
    )); ?>

<h4>Silahkan Cari Status</h4>

<div class="well">
<div class="form">
<?php
 $form = $this->beginWidget('bootstrap.widgets.TbActiveForm',array(
 	'id'=>'Sppb2-form',
 	'enableAjaxValidation'=>false,
 )); ?>

 	<?php echo $form->errorSummary($model); ?>

 	
 	<?php echo $form->labelEx($model,'Pilih Status');?>
 	<?php echo $form->dropDownList($model,'status',$model->getStatus(),array('prompt'=>'-= silahkan pilih =-'));?>
 	<?php echo $form->error($model,'status');?>
 	

 	
 	
 	<br>
 	<br>
 	<div >
 	
		<?php 
		
		$this->widget('bootstrap.widgets.TbButton',array(
			'buttonType'=>'submit',
			'type'=> 'primary',
			'label'=>'Cari',
			'block'=>false,
			'icon'=>'icon-search',
			'htmlOptions' => array(
        	'title' => 'Cari Permintaan',
        	),

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

	<h1 style="color:green">Data Ditemukan</h1>
	<table class ="zebra-table" border="1">
		<thead>
			<tr>
				<th id="cari">Nomor Permintaan</th>
				<th id="cari">Departemen Peminta</th>
				<th id="cari">Tanggal Dan Waktu</th>
				<th id="cari" width="300">Message</th>
				<th id="cari" width="100">Status</th>
			</tr>
			
		</thead>

		<tbody>
			<?php foreach ($lapor as $lapors) :?>
			<tr>
				<td id="cari">  <?php echo $lapors->no_per ;?> </td>
				<td id="cari">  <?php echo $lapors->nama_dept ;?> </td>
				<td id="cari">  <?php echo $lapors->tgl ;?> </td>
				<td id="cari">  <?php echo $lapors->message; ?> </td>
				<td id="cari">  <?php echo $lapors->status ;?> </td>
			</tr>
			<?php endforeach;?>
			
		</tbody>
	</table>


<?php else: ?>
<h2 style="color:red">Data Tidak Di Temukan</h2>

 <?php endif; ?>