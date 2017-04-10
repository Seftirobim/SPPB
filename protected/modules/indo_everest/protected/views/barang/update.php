<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
	//array('label'=>'List Barang', 'url'=>array('index')),
//	array('label'=>'Menu Barang', 'url'=>array('create')),
	//array('label'=>'View Barang', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Barang', 'url'=>array('admin')),
//);
?>

<h1>Update Barang <?php echo $model->id; ?></h1>
<br>
<h5 style="color:#E7002E">Klik Update Barang Untuk Mengupdate</h5>
<?php $this->renderPartial('_firm', array('model'=>$model)); ?>