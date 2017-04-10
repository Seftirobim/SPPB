<?php
$this->breadcrumbs=array(
	'Chart'=>array('index'),
	'Statistik Pengguna',
);
?>

<?php
$this->menu=array(
	array('icon'=>'icon-eye-open','label'=>'Daftar Sppb', 'url'=>array('index')),
	array('icon'=>'icon-edit','label'=>'Create Sppb', 'url'=>array('create')),
	array('icon'=>'icon-cog','label'=>'Manage Sppb', 'url'=>array('admin')),
	array('icon'=>'icon-eye-open','label'=>'List Update', 'url'=>array('InUpdate')),
);
?>

<?php
 $form = $this->beginWidget('bootstrap.widgets.TbActiveForm',array(
 	'id'=>'tinstrument-form',
 	'enableAjaxValidation'=>false,
 )); ?>


 <?php $this->endWidget(); ?>

<div align="center">

	<?php
		$label=array();
		$nilai=array();
		$tahun = date('Y');
		foreach($dataProvider->getData() as $i=>$ii)
		{
		    $label[$i]=$ii['statistik'];
		    $nilai[$i]=(int)$ii['count(permintaan_dept)'];
		}

		$this->widget('application.extensions.highchart.highcharts.HighchartsWidget', array(
		   'scripts'=>array(
		   	'modules/exporting',
		   	'themes/dark-unica'),

		   'options'=>array(
		     'chart'=> array('defaultSeriesType'=>'bar',),
		     'title' => array(
		      	'text' => 'Statistik Permintaan Departemen beberapa tahun kebelakang  s/d tahun '.$tahun,
		      	'style'=>array('font'=>'20px "Amaranth"'),),
		     
		      'legend'=>array(
		      	'enabled'=>false,
		      	'itemStyle'=>array('font'=>'20px "Amaranth"'),),

		      'xAxis'=>array('categories'=>$label,
					'title'=>array('text'=>''),
					'style'=>array('font'=>'15px "Amaranth"'),
					),

		      'yAxis'=> array(
		            'min'=> 0,
		            'title'=> array(
		            'text'=>'Jumlah permintaan',
		            'style'=>array('font'=>'15px "Amaranth"'),
		            ),
		        ),
		      'series' => array(
		         array('data' => $nilai)
		      ),
		      'tooltip' => array('formatter' => 'js:function(){ return "<b>"+this.point.name+"</b> :"+this.y; }'),
		      'tooltip' => array(
				'formatter' => 'js:function() {return "<b>"+ this.x +"</b><br/>"+"Jumlah : "+ this.y; }'
		      ),
		      'plotOptions'=>array('pie'=>(array(
		                    'allowPointSelect'=>true,
		                    'showInLegend'=>true,
		                    'cursor'=>'pointer',
		                )
		            )                       
		        ),
		      'credits'=>array('enabled'=>false),

		   )
		));
		
	?>
	
</div>