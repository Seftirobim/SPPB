<?php /* @var $this Controller */ ?>



<!DOCTYPE html>
<style type='text/css' scoped='scoped'>
#BounceToTop{
  position:fixed; 
  bottom:10px; 
  right:7px;
  cursor:pointer;
  z-index: 100;
  display:none; }

  

a.brand{
  padding: 10px;

}
.nav{
padding-top: 10px;
position: absolute;
/*padding-left: 20%;*/


}
li{
  padding-right: 5px;

}

#menu-right {
    margin-right: 0;
}

.pull-right {
  float: right !important;
}
div.container-fluid {
  padding-right: 0px;
  padding-left: 0px;
  *zoom: 1;
}

.cocok{
  width: 3px;
  border-style: solid;
  height: 
}
</style>
<script>
// function cek(){
//     $.ajax({
//         url: "<?php //echo Yii::app()->baseUrl ?>/index.php?r=permintaan/Notif",
//         cache: false,
//         success: function(msg){
//             $("#notif").html(msg);
//         }
//     });
//       var waktu = setTimeout("cek()",3000);
// }

// $(document).ready(function(){
//     cek();
  
// });

</script>
<?php
  $notif = "<div id='notif'></div>";
?>
<?php
  $sql = Yii::app()->db->createCommand('select * from permintaan where status="Belum Dikonfirmasi"')->queryAll(); //It's return the Array
  $data = count($sql);
  if ($data == 0){
    $data ='' ;
  }else{
   $data ='['.count($sql).']'; 
  }


/*Yii::app()->clientScript->registerScript("aa","

    ");*/

?>
<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/sefti-main.js');
?>


<div id='BounceToTop'><img alt='Back to top' src="<?php echo Yii::app()->request->baseUrl; ?>/images/aa.png"/></div>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
   <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2.ico" type="image/x-icon" /> 
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>


</head>



<body>
<div id="output"></div>


<div>
<?php 




$this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse',
    'collapse'=>true,

    //uncoment untuk logo image
    'brand'=> ''.CHtml::image(Yii::app()->getBaseUrl().'/images/logo2.png').' PT. INDO EVEREST TEXINDO',
    //'brand'=>'PT INDO EVEREST TEXINDO'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp',
    //'htmlOptions'=>array('style'=>'text-align:center'),
   //'brand'=>'Aplikasi',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-left'),
            'submenuHtmlOptions' => array ('class' => 'multilevel'),
            'items'=>array(
                    array('label'=>'Utama','icon'=>'icon-home','url'=>array('/site/index'),'style'=>'size:200px;'),
      
                    array('icon'=>'icon-exclamation-sign','label'=>'Tentang Pengembang', 'url'=>array('/site/page', 'view'=>'about')),
        
                    //array('label'=>'Contact', 'url'=>array('/site/contact')),
                ),
            ),
         
         array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),

            'items'=>array(
                    array('icon'=>'icon-ok','label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            //Departemen
              array('label'=>'Daftar Menu','icon'=>'icon-list','url'=>array('#'),'items'=>array(
                      array('label'=>'Departemen','visible'=>Yii::app()->user->getLevel()=='3'), 
                 array('icon'=>'icon-pencil','label'=>'Buat Permintaan','url'=>array('/Permintaan/create'),'visible'=>Yii::app()->user->getLevel()=='3'),
                 array('icon'=>'icon-search','label'=>'Lihat Informasi','url'=>array('/Permintaan/cari'),'visible'=>Yii::app()->user->getLevel()=='3'),
                      ),'visible'=>Yii::app()->user->getLevel()=='3'
                    ),
              //Admin
              array('label'=>'Daftar Menu','icon'=>'icon-list','url'=>array('#'),'items'=>array(
              array('label'=>'Admin','visible'=>Yii::app()->user->getLevel()=='1'), 
                      array('icon'=>'icon-star','label'=>'Kelola User','url'=>'#', 'itemsOptions' =>array(
                            'class'=>'dropdown-submenu'),
                            'items'=>array(
                                array('icon'=>'icon-edit','label'=>'Buat User','url'=>array('/User/create'),),
                                array('icon'=>'icon-edit','label'=>'List User','url'=>array('/User/index'),),
                                array('icon'=>'icon-edit','label'=>'Manage User','url'=>array('/User/admin'),),
                                ),'visible'=>Yii::app()->user->getLevel()=='1'
                            ),
              array('icon'=>'icon-star','label'=>'Kelola Data Master','url'=>'#', 'itemsOptions' =>array(
                    'class'=>'dropdown-submenu'),
                    'items'=>array(
                          array('label'=>'Daftar'),
                            //array('icon'=>'icon-edit','label'=>'Login','url'=>array('/login/create'),),//'items'=>array(
                              //array('label'=>'Tambah User','url'=>array('login/create'),),
                              //array('label'=>'Update user','url'=>array('/login/InUpdate'),),
                                                                   //array('label'=>'Lihat user','url'=>array('/login/'),),
                              //array('label'=>'Manage User','url'=>array('/login/admin'),),
                              //), ),
                            
                            array('icon'=>'icon-edit','label'=>'Departemen','url'=>array('/Departemen/create'),),//'items'=>array(
                              //array('label'=>'Tambah Departemen','url'=>array('Departemen/create'),),
                              //array('label'=>'Update Departemen','url'=>array('/Departemen/InUpdate'),),
                                                                //  array('label'=>'Lihat Departemen','url'=>array('/Departemen/'),),
                              //array('label'=>'Manage Departemen','url'=>array('/Departemen/admin'),),
                              //),),
                                                    array('icon'=>'icon-edit','label'=>'Barang','url'=>array('/Barang/Create'),),//'items'=>array(
                                                              //  array('label'=>'Tambah Barang','url'=>array('Barang/create'),),
                                                              //  array('label'=>'Lihat Barang','url'=>array('/Barang/'),),
                                                             //    array('label'=>'Update Barang','url'=>array('/Barang/InUpdate'),),
                                                               //  array('label'=>'Manage Barang','url'=>array('/Barang/admin'),),
                                                              //   ),), 
                                                    array('icon'=>'icon-edit','label'=>'Gudang','url'=>array('/Gudang/Create'),),//'items'=>array(
                                                               // array('label'=>'Tambah Gudang','url'=>array('Gudang/create'),),
                                                                //array('label'=>'Lihat Gudang','url'=>array('/Gudang/'),),
                                                                // array('label'=>'Update Gudang','url'=>array('/Gudang/InUpdate'),),
                                                               //  array('label'=>'Manage Gudang','url'=>array('/Gudang/admin'),),
                                                              //   ),),

                            ),
                          ),

                      ),'visible'=>Yii::app()->user->getLevel()=='1'
                    ),
                    //General Affair

              array('label'=>'Daftar Menu'.' '.$data,'icon'=>'icon-list','url'=>array('#'),'items'=>array(
             
          
             array('label'=>'General Affair','visible'=>Yii::app()->user->getLevel()=='2'), 
                   array('icon'=>'icon-tasks','label'=>'Kelola Sppb','url'=>'#', 'itemsOptions' =>array(
                                'class'=>'dropdown-submenu'),
                            'items'=>array(
                                array('label'=>'Daftar'),
                                array('icon'=>'icon-edit','label'=>'SPPB','url'=>array('/Sppb2/Create'),'linkOptions' => array('target' => '_blank')),
                                array('icon'=>'icon-search','label'=>'Rekap SPPB','url'=>array('Sppb2/Laporan'),),
                                //array('icon'=>'icon-signal','label'=>'Statistik','url'=>array('/Sppb2/chart'),)
                                    //array('label'=>'Update SPPB','url'=>array('/Sppb/InUpdate'),),
                                   // array('label'=>'Manage SPPB','url'=>array('/Sppb/admin'),),
                                   
                  
                                ),'visible'=>Yii::app()->user->getLevel()=='2'
                            ),
                    array('icon'=>'icon-eye-open','label'=>'Lihat Permintaan'. ' '.$data,'url'=>array('/Permintaan/daftar'),'visible'=>Yii::app()->user->getLevel()=='2'),
                    array('icon'=>'icon-eye-open','label'=>'Laporan Status','url'=>array('/Permintaan/cari2'),'visible'=>Yii::app()->user->getLevel()=='2'),
                
                ),'visible'=>Yii::app()->user->getLevel()=='2'),
                // array('itemOptions'=>array('id'=>'notif'), 'visible'=>Yii::app()->user->getLevel()=='2'),
                  //MENU USERS 
                    array(
                    'icon'=>'icon-user',
                    'label'=>'Hi '.Yii::app()->user->name.' ', 'url'=>array('#'),
                    'items'=>array(
                  array('icon'=>'icon-off','label' =>'Keluar','url' =>array('site/logout'),//,'linkOptions' => array('onclick'=>'return confirm("Apakah Anda Yakin Akan Logout ?")'),
                    ),
                  ), 'visible'=>!Yii::app()->user->isGuest),
                   array('icon'=>'icon-user','label'=>'Selamat Datang '.Yii::app()->user->name.' ', 'url'=>array('#'), 'visible'=>Yii::app()->user->isGuest),
              )
            ),

    ),
)); ?>
</div>




<div class="container-fluid" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
<div id="wrapper">
<br>
	<div id="footer" style="color:white">
         <br>
           <div class="footerleft">
                <table border="0">
                <tr>
                  <td>
                  <hr style="border-color:#FE420A"></hr>
                    <img width="50" src="<?php echo Yii::app()->getBaseUrl(TRUE);?>/images/logo2.png" /> PT INDO EVEREST TEXINDO<h6>Jl. Cisirung No. 101 KM. 02 (Cangkuang Wetan) Moh. Toha</h6> <h2 style="position:center;">Aplikasi Pembuatan SPPB</h2>
                  </td>
                </tr>
                <tr>
                  <td width="450" align="justify">
                  <hr style="border-color:#FE420A"></hr>
                  Aplikasi Pembuatan SPPB Merupakan layanan yang membantu
                  General Affair pada PT INDO EVEREST TEXINDO untuk mencatat
                  Semua permintaan barang departemen tertentu sekaligus sebagai layanan
                  yang dapat mencatat bukti pengeluaran barang, serta memudahkan untuk rekapitulasi
                  data. <?php echo CHtml::link('Selengkapnya...',array('Site/Tentang')); ?>

                  </td>
                </tr>
                </table>
          </div>
         <!--
           <table align="center" style="padding-right:10px">
              <tr>
                    <td>You Can Follow Sefti On &nbsp<a id="hoho" href ="https://id-id.facebook.com/eptiz" TARGET="_blank">Facebook</a></td>
                    <td>&nbsp|&nbsp<a id="hihi" href ="#" TARGET="_blank">Twitter</a></td>
                    <td>&nbsp|&nbsp<a id="hihi" href ="#" TARGET="_blank">Web</a></td>
                    <td>&nbsp|&nbsp<a id="hihi" href ="#" TARGET="_blank">Friendster</a></td>
              </tr>
        </table>
        -->
         <div align="right" style="padding-right:10px;">
            <table border="0" width="300">
              <tr>
                    <td><h2 align="center">INFORMASI<h2><hr style="border-color:#FE420A"></td>
              </tr>
               <tr>
                    <td align="center"><?php echo CHtml::link('Tentang Aplikasi',array('Site/Tentang'),array('id'=>'hihi')); ?></td>   
              </tr
              <tr>
                    <td align="center"><?php echo CHtml::link('Fitur',array('Site/Fitur'),array('id'=>'hihi')); ?></td>    
              </tr
              <tr>
                    <td align="center"><a href="#" id="hihi">Bantuan</a></td>   
              </tr

        </table>
           </div>
              <div align="center" style="position:absolute; padding-left:42%;color:">
                &nbsp
            		Copyright &copy; <?php echo date('Y'); ?> by Sefti Robiansyah M.<br/>
                            &nbsp
            		All Rights Reserved.<br>
            		<?php echo Yii::powered(); ?>
           </div>


	</div><!-- footer -->
</div><!--  wrapper-->  



</div><!-- page -->


</body>
</html>
