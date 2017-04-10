<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/loading.js');
?>

<div id="loadings"></div>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'Tentang Pengembang',
);
?>
<h1>Tentang Pengembang</h1>
<table border="0">
	<tr>
		<td class="icon-user"></td>
		<td >Sefti Robiansyah M</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td class="icon-envelope"></td>
		<td >msiswasefti.lpkia@gmail.com</td>
	</tr>
	<tr>
		<td class="icon-map-marker"></td>
		<td >Soekarno Hatta, Bandung</td>
	</tr>
	<tr>
		<td class="icon-certificate"></td>
		<td >MTCNA | MOS</td>
	</tr>
</table>
<br>
	
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Click me Please',
    'type'=>'info',
    'icon'=>'info-sign',
    'htmlOptions'=>array('data-title'=>'A Title', 'data-content'=>'Aplikasi Ini Dibuat Oleh Sefti Robiansyah Mulyadi Untuk memenuhi salah satu persyaratan sidang tugas akhir.', 'rel'=>'popover'),
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
	
