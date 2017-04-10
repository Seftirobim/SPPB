<script>
  var time = null
  function move() {
  window.location = 'index';
  //window.location.reload();
  window.refresh();
}
</script>


<?php
// $baseUrl = Yii::app()->baseUrl; 
// $cs = Yii::app()->getClientScript();
// $cs->registerScriptFile($baseUrl.'/js/loading.js');
?>


<!-- <div id="loadings"></div> -->
<style type="text/css">

.alert{
text-align: center;
font-size: 40px;
background-color: #f2f2f2;
}

div.hero-unit h1{
  font-size: 50px;
  color: #D8D8D8;
  text-shadow: 2px 10px 10px #111111;

}

div.hero-unit{
  background-color: #258643;
  font-size: 20px;
  text-align: center;


}
</style>
<body onload="timer=setTimeout('move()',6000)">
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Terima Kasih Sudah Memakai Aplikasi Ini....',

)); ?>

<?php  //Yii::app()->user->setFlash('info', '<strong>Bye bye!</strong>');?>

<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('success','info'),
    )); ?>
<br>
<br>
<br>
<br>
<br>
<br>