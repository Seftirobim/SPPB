
<?php $row_id = "birings-" . $key ?>
<div class='row clearfix' id="<?php echo $row_id ?>">
    <?php
    echo $form->hiddenField($model, "[$key]id");
    echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
    ?>
          <div class="span-5">
                 <?php echo $form->labelEx($model,'Kode Barang'); ?>
                  <?php
                  echo $form->textField($model, "[$key]kd_brg",array('style'=>'width:80px'));
                  echo $form->error($model, "[$key]kd_brg");
                  ?>
          </div>
           
          <div class="span-5">
                 <?php echo $form->labelEx($model,'Nama Barang'); ?>
                 <?php
                  echo $form->textField($model, "[$key]nm_barang");
                  echo $form->error($model, "[$key]nm_barang");
                  ?>
          </div>
           
          <div class="span-5">
              <?php echo $form->labelEx($model,'Satuan'); ?>
                  <?php
                  echo $form->textField($model, "[$key]satuan",array('style'=>'width:60px'));
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
              
          <div class="span-1">
          
          </br>
          </br>
                  <?php echo $form->deleteRowButton($row_id, $key); ?>
                    </br>
                  </br>
          </div>

</div>
		
