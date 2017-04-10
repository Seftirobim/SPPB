<!DOCTYPE html>
<style type="text/css">
	.well{
  background-image:url('../themes/bootstrap/css/green_cup.png');
  border-width: 1px;
  border-color: green;
}
</style>
<html>
<head>
<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/loading.js');
?>

<div id="hidden">
<div id="progress-bar"></div>
</div>
<div id="loadings"></div>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="well">
<h1 align="center" style="color:#f2f2f2"> Fitur Aplikasi Pencatatan SPPB</h1>
			<p align="center">
			<img width="800" src="<?php echo Yii::app()->getBaseUrl(TRUE);?>/images/fitur1.png" />
			</p>
			<p align="center">
			<h2 align="center">Rekap Data</h2>
			<h4 align="center">Rekap Data merupakan fitur untuk memudahkan Anda untuk merekap data SPPB bulanan anda<br>
			Dengan mengetikan tahun dan bulan pada kolom field data bulanan anda akan muncul setelah <br>
			anda menekan tombol cetak pdf.
			</h4>
			</p>
			<hr>
			<p align="center">
			<img width="800" src="<?php echo Yii::app()->getBaseUrl(TRUE);?>/images/fitur2.png" />
			<h2 align="center">Hasil Rekapan</h2>
			<h4 align="center">Ini Adalah Contoh hasil dari rekap data, disana terlihat ada fungsi untuk<br>
			Print,save dan lain lain.
			</h4>
			</p>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
</div>

</html>

<br>
<br>
<br>