<?php

$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
	'id'=>$key.'tambih',
	'options'=>array(
		'autoOpen'=>true,
		'title'=>'Silahkan Mencari',
		'modal'=>false,
		'width'=>600,
    'height'=>400,
		))
);
echo $key;
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'barang_grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_barang',
		'nama_barang',
    'satuan',
		// NAMBAHIN VARIABLE KEY DIBAWAH
	    array(
          		'header'=>'Pilih',
        		 'type'=>'raw',
          		 'value'=>'CHtml::button("+",array(
              			 "onClick"=>CHtml::ajax(array(
              			 "url"=>Yii::app()->createUrl("Sppb2/selectKode2",array("id"=>$data->primaryKey)),
              			 "dataType"=>"json",
             			  "success"=>"function(data){
                  			   
                  			   $(\"#'.$key.'kd_brg\").val(data.dua);
                           $(\"#'.$key.'nama_barang\").val(data.tigo);
                  			   $(\"#'.$key.'satuan\").val(data.tiga);
                     			 $(\"#'.$key.'tambih\").remove();
               			 }")
          	  ),"id"=>"child".$data->primaryKey,"style"=>"cursor:pointer;"))',
         ),
       ),
  ));
$this->endWidget('zii.widgets.jui.CJuiDialog');

?>