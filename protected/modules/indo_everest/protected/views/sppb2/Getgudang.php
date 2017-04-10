<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
	'id'=>'bandsdialog3',
	'options'=>array(
		'autoOpen'=>true,
		'title'=>'Klik button + untuk memilih',
		'modal'=>true,
		'width'=>600,
		))
);

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'gudang_grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nama_gudang',
		
	    array(
          		'header'=>'Pilih',
        		 'type'=>'raw',
          		 'value'=>'CHtml::button("+",array(
              			 "onClick"=>CHtml::ajax(array(
              			 "url"=>Yii::app()->createUrl("Sppb2/selectKode3",array("id"=>$data->primaryKey)),
              			 "dataType"=>"json",
             			  "success"=>"function(data){
                  			   $(\"#Namamodel_wilayah\").val(data.satu);
                  			   $(\"#nama_gudang\").val(data.dua);
                     			    $(\"#bandsdialog3\").remove();
               			 }")
          	  ),"id"=>"child".$data->primaryKey,"style"=>"cursor:pointer;"))',
         ),
       ),
  ));
$this->endWidget('zii.widgets.jui.CJuiDialog');

?>