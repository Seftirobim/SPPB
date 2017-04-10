

<?php
 $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
   	'id' => 'depart',
   	'options' => array(
  	'autoOpen' => true,
  	 'title' => 'Klik button + untuk memilih',
  	 'modal' => false,
  	 'width' => 600,
     'height'=>400,
 	  ))
	 );
 $this->widget('bootstrap.widgets.TbGridView', array(
 	  'id'=>'departemen-grid',
 	  'dataProvider'=>$model->search(),
 	  'filter'=>$model,

	   'columns'=>array(
	    	'kode_dept',
     		 'nama_dept',
      			  array(
           			'header'=>'Pilih',
         			  'type'=>'raw',
           			'value'=>'CHtml::button("+",array(
            			   "onClick"=>CHtml::ajax(array(
            			   "url"=>Yii::app()->createUrl("Sppb2/SelectKode",array("id"=>$data->primaryKey)),
           			    "dataType"=>"json",
           			    "success"=>"function(data){
            			         $(\"#Namamodel_wilayah\").val(data.satu);
                   			  $(\"#kode_dept\").val(data.dua);
                   			  $(\"#nama_dept\").val(data.tiga);
                 			    $(\"#depart\").remove();
           			     }")
         	   ),"id"=>"child".$data->primaryKey,"style"=>"cursor:pointer;"))',
         ),
       ),
  ));
  $this->endWidget('zii.widgets.jui.CJuiDialog');