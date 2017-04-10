<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome To '.CHtml::encode(Yii::app()->name),

)); ?>

<p>PT. INDO EVEREST TEXINDO adalah perusahan yang bergerak dalam bidang ...</p>

<?php $this->endWidget(); ?>


<p><h3>Silahkan Login Untuk Memulai</h3></p>

<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'images/1.jpg', 'label'=>'Stay Focus', 'caption'=>'Stay Fokus Lah Broo.'),
        array('image'=>'images/2.jpg', 'label'=>'Work Hard Dream Big', 'caption'=>'Harus Bekerja Keras Bermimpi Besar.'),
        array('image'=>'images/3.jpg', 'label'=>'Imaji', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>


<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
