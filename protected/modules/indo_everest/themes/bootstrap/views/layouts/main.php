<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>



<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    //'type'=>'inverse',
    'collapse'=>true, 
    //uncoment untuk logo image
    //'brand'=> ''.CHtml::image(Yii::app()->getBaseUrl().'/images/download.png').'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp',
    'brand'=>'PT INDO EVEREST TEXINDO'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp',
    //'htmlOptions'=>array('style'=>'text-align:center'),
   //'brand'=>'Aplikasi',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            
            'submenuHtmlOptions' => array ('class' => 'multilevel'),
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Tentang Pengembang', 'url'=>array('/site/page', 'view'=>'about')),
                //array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Daftar Menu','url'=>array('#'),'items'=>array(
             
             		
      		array('label'=>'Super admin','url'=>'#', 'itemsOptions' =>array(
                		'class'=>'dropdown-submenu'),
                	'items'=>array(
                	array('label'=>'Menu'),
                		array('label'=>'Login','url'=>array('/login/create'),),//'items'=>array(
                			//array('label'=>'Tambah User','url'=>array('login/create'),),
                			//array('label'=>'Update user','url'=>array('/login/InUpdate'),),
                                                           //array('label'=>'Lihat user','url'=>array('/login/'),),
                			//array('label'=>'Manage User','url'=>array('/login/admin'),),
                			//), ),
                		
                		array('label'=>'Departemen','url'=>array('/Departemen/create'),),//'items'=>array(
                			//array('label'=>'Tambah Departemen','url'=>array('Departemen/create'),),
                			//array('label'=>'Update Departemen','url'=>array('/Departemen/InUpdate'),),
                                                        //  array('label'=>'Lihat Departemen','url'=>array('/Departemen/'),),
                			//array('label'=>'Manage Departemen','url'=>array('/Departemen/admin'),),
                			//),),
                                            array('label'=>'Barang','url'=>array('/Barang/Create'),),//'items'=>array(
                                                      //  array('label'=>'Tambah Barang','url'=>array('Barang/create'),),
                                                      //  array('label'=>'Lihat Barang','url'=>array('/Barang/'),),
                                                     //    array('label'=>'Update Barang','url'=>array('/Barang/InUpdate'),),
                                                       //  array('label'=>'Manage Barang','url'=>array('/Barang/admin'),),
                                                      //   ),),	
                                            array('label'=>'Gudang','url'=>array('/Gudang/Create'),),//'items'=>array(
                                                       // array('label'=>'Tambah Gudang','url'=>array('Gudang/create'),),
                                                        //array('label'=>'Lihat Gudang','url'=>array('/Gudang/'),),
                                                        // array('label'=>'Update Gudang','url'=>array('/Gudang/InUpdate'),),
                                                       //  array('label'=>'Manage Gudang','url'=>array('/Gudang/admin'),),
                                                      //   ),),

                		),
                	),

            array('label'=>'General Affair','url'=>'#', 'itemsOptions' =>array(
                        'class'=>'dropdown-submenu'),
                    'items'=>array(
                    
                        array('label'=>'SPPB','url'=>array('/Sppb2/Create'
                            //array('label'=>'Buat SPPB','url'=>array('Sppb/create'),),
                            //array('label'=>'Update SPPB','url'=>array('/Sppb/InUpdate'),),
                           // array('label'=>'Manage SPPB','url'=>array('/Sppb/admin'),),
                            ),),
          
                        ),
                    ),

                ),'visible'=>!Yii::app()->user->isGuest),

           
              array(
                    'label'=>'Hi '.Yii::app()->user->name.' ', 'url'=>array('#'),
                    'htmlOptions'=>array('class'=>'pull-right'),
                    'items'=>array(
                	array('label' =>'Logout','url' =>array('site/logout'),
                		),
                	), 'visible'=>!Yii::app()->user->isGuest),
                	
            ),
        ),
    ),
)); ?>




<div class="container-fluid" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Sefti Robiansyah M.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->


</body>
</html>
