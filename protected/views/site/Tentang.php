<!DOCTYPE html>
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
<div align="center" style="padding-top:50px;height:50%">
<div class="well" style="width:70%;text-align:justify" >
			<p style="font-size:19px;">
				Aplikasi Pembuatan SPPB Merupakan layanan yang membantu General Affair dan departemen - departemennya
				pada PT INDO EVEREST TEXINDO. untuk GENERAL AFFAIR aplikasi ini dapat mencatat Semua permintaan barang 
				departemen tertentu dan bisa juga sebagai layanan yang dapat mencatat bukti pengeluaran barang, serta 
				memudahkan untuk rekapitulasi data. Sedangkan Bagi departemen yang akan meminta dapat membuat permintaan
				pada aplikasi ini.
			</p>
		</div>
</div>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



	
