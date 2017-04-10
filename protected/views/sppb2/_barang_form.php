<script>
// $(document).ready(function(){
//     $(document).on("change","#kd_brg",function(){
//       var nilai = $(this).val();
//         //alert(nilai);
//         $.ajax({
//           type : "post",
//           url  : "<?php echo Yii::app()->createUrl('Sppb2/getdata')?>",
//           data : "nilai="+nilai,

//           success:function(data){
//             //alert(data);
//             //$('#nama_barang').val(data.nama_barang);
//             //$('#satuan').val(data.satuan);
//           },
//           error:function(data){
//              alert('Error Data Tidak Ada');

//           },
//           dataType:"json"
//         });
//     });
//   });
</script>

<?php $row_id = "birings-" . $key ?>



<div class='row clearfix' id="<?php echo $row_id ?>">
    <?php
    echo $form->hiddenField($model, "[$key]id");
    echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
    ?>
    <div style="padding-left: 30px">
    <?php
      echo CHtml::ajaxbutton('Cari Kode Dan Nama Barang',Yii::app()->createUrl('Sppb2/GetBarang&key='.$key), //TAMBAH INI
        array('update'=>'#kode_field3'),array("class"=>'btn-cari'));
      ?>
       <div id="kode_field3" style="visibility:hidden;"></div>
    </div>   
          <div class="span-5">
                 <?php echo $form->labelEx($model,'Kode Barang'); ?>
                  <?php
                  echo $form->textField($model, "[$key]kd_brg",array('style'=>'width:80px','id'=>$key . 'kd_brg'));
                  echo $form->error($model, "[$key]kd_brg");
                  ?>
          </div>
           
          <div class="span-5">
                 <?php echo $form->labelEx($model,'Nama Barang'); ?>
                 <?php
                  echo $form->textField($model, "[$key]nm_barang",array('id'=>$key . 'nama_barang'));
                  echo $form->error($model, "[$key]nm_barang");
                  ?>
          </div>
           
          <div class="span-5">
              <?php echo $form->labelEx($model,'Satuan'); ?>
                  <?php
                  echo $form->textField($model, "[$key]satuan",array('style'=>'width:60px','id'=>$key . 'satuan'));
                  echo $form->error($model, "[$key]satuan");
                  ?>
          </div>

          <div class="span-5">
                <?php echo $form->labelEx($model,'Qty Request'); ?>
                  <?php
                  echo $form->textField($model, "[$key]qty_request",array('style'=>'width:60px'));
                  echo $form->error($model, "[$key]qty_request");
                  ?>
          </div>

          <div class="span-5">
                <?php echo $form->labelEx($model,'Qty Realisasi'); ?>
                 <?php
                  echo $form->textField($model, "[$key]qty_realisasi",array('style'=>'width:60px'));
                  echo $form->error($model, "[$key]qty_realisasi");
                  ?>
          </div>

          <div class="span-5">
                  <?php echo $form->labelEx($model,'Keterangan'); ?>
                 <?php
                  echo $form->textArea($model, "[$key]keterangan",array('rows'=>5, 'cols'=>50,'class'=>'span7'));
                  echo $form->error($model, "[$key]keterangan");
                  ?>
          </div>
              
          <div class="span-1" id="tabular-content">
            <br>
            <br>
            <br>
            <br>
            <br>
            

                  <?php echo $form->deleteRowButton($row_id, $key); ?>
                      
          </div>


</div>
		
