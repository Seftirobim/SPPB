
<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<style type="text/css">
    .ec{
        border-style: solid;
        border-width: 2px;
        border-color: #0077B3;
        border-radius: 5px;
    }
    h2{
        font-size: 20px;
        font-family: 'Amaranth';
    }
    .judul{
        font-size: 30px;
        font-family: 'Amaranth';
    }
    hr{
        border-color: #0077B3;
    }
</style>

<div class="row">
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar">
       
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>"<h3 style='color: #258643; padding-left:0px;'>Operasi</h3>",
            ));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));

            $this->endWidget();
        ?>
        </div>
        <!-- <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> -->
        
        <!-- <div class="ec">
        <div align="center" class="judul">KALENDER</div>
        <hr>       
         <?php 
         // $this->widget('ext.EFullCalendar.EFullCalendar', array(
         //    'themeCssFile'=>'cupertino/theme.css',
         //    'htmlOptions'=>array(
         //    // you can scale it down as well, try 80%
         //     'style'=>'width:100%'),
         //    'options'=>array(
         //        'header'=>array(
         //        'right'=>'prev,next',
         //        'center'=>'title',
         //        'left'=>'today'
         //        ),
         //    'lazyFetching'=>true
         //    )));
        ?>
        </div> -->
        </div><!-- sidebar -->
    </div>
</div>

<?php $this->endContent(); ?>