<!-- <meta http-equiv="refresh" content="15" /> -->

<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/loading2.js');
?>

<div id="load_data"></div>
<div id="hidden">
<div id="progress-bar"></div>
</div>
<div id="loadings"></div>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div>
<?php  Yii::app()->user->setFlash('success', 'Anda sebagai &nbsp'."<strong>".strtoupper(CHtml::encode(Yii::app()->user->name))."</strong>"."&nbspTelah Sukses Login" );   ?>
<?php  
// Yii::app()->user->setFlash('info', '<strong>Info!</strong> Jumlah Permintaan Saat Ini '.CHtml::link('<span id="notif" class="badge badge-important"></span>',array('Permintaan/Daftar')));

?>

</div>
<span id ="notif">
</span>
<div id ="header">Selamat Datang Di Aplikasi Pembuatan SPPB</div>
<html>
<body>
<script>
var myAudio = new Audio('alarm.mp3');
function play(){
	myAudio.play();
}

function pause(){
	myAudio.pause();
}
function cek(){
	
	
    $.ajax({
        url: "<?php echo Yii::app()->baseUrl ?>/index.php?r=permintaan/Notif",
        cache: false,
        success: function(msg){
            var sip = $("#notif").html(msg);
            sip;

            

            
        }
    });
      
      var waktu = setTimeout("cek()",3000);	

      // pause();
}
	  

$(document).ready(function(){
	
    cek();
    
   
  	 
});


</script>	
</body>
<?php 
/*
$this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Selamat Datang Di '.CHtml::encode(Yii::app()->name),
    'htmlOptions'=>array('styles'=>'font-size:10px'),)); */?>


 <!-- <p style="color:black">PT. INDO EVEREST TEXINDO adalah perusahan yang bergerak dalam bidang ...</p> -->
 <br>

<?php //$this->endWidget(); ?>
 <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success','info'),
    )); 
?>

 
<?php
//.'<strong>'.$count.'</strong>'.')
?>

</html>





