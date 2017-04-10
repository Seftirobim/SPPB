<?php

class Sppb2Controller extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function actions()
	{
		return array(
			'getRowForm'=>array(
				'class'=>'ext.DynamicTabularForm.actions.GetRowForm',
				'view'=>'_barang_form',
				'modelClass'=>'Barang2'
				),
			);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','getRowForm','InUpdate'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','GetDepartemen','GetBarang','getdata','SelectKode','selectKode2','Getgudang','SelectKode3','Report','Laporan','Rekapan','Chart'),
				//'users'=>array('admin','general_affair'),
				'expression'=>"Yii::app()->user->getLevel()=='2'"
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				//'users'=>array('admin','general_affair'),
				'expression'=>"Yii::app()->user->getLevel()=='2'"
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Sppb2;
		$barangs = array(new Barang2);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sppb2']))
		{
			$model->attributes=$_POST['Sppb2'];

			if (isset($_POST['Barang2'])) {

				$barangs = array();
				foreach ($_POST['Barang2'] as $key => $value) {
					$birings = new Barang2('batchSave');
					$birings->attributes = $value;
					$barangs[ ] = $birings;
				}
			}

			$valid = $model->validate();
			foreach ($barangs as $birings) {
				$valid = $birings->validate() & $valid;
			}

			if ($valid) {
				$transaction = Yii::app()->db->beginTransaction();
				try {
					$model->save();
					$model->refresh();

					foreach ($barangs as $birings) {
						$birings->id2 = $model->id;
						$birings->save();
					}
					$transaction->commit();
				} 
				catch (Exception $e) {
					$transaction->rollback();
				}
				
				$this->redirect(array('view', 'id' => $model->id));
			}

			
		}

		$this->render('create',array(
			'model' => $model,
			'barangs' => $barangs
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$barangs = $model->barangs;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sppb2']))
		{
			$model->attributes=$_POST['Sppb2'];

			if (isset($_POST['Barang2'])) {
				$barangs = array();
				foreach ($_POST['Barang2'] as $key => $value) {
					if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_CREATE)
						$barangs[$key] = new Barang2();
					else if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_UPDATE)
						$barangs[$key] = Barang2::model()->findByPk($value['id']);
					else if ($value['updateType'] == DynamicTabularForm::UPDATE_TYPE_DELETE) {
						$delete = Barang2::model()->findByPk($value['id']);
						if ($delete->delete()) {
							unset($barangs[$key]);
							continue;
						}
					}
					$barangs[$key]->attributes = $value;
				}
			}

			$valid = $model->validate();
			foreach ($barangs as $birings) {
				$valid = $birings->validate() & $valid;
			}

			if ($valid) {
				$transaction = $model->getDbConnection()->beginTransaction();
				try {
					$model->save();
					$model->refresh();

					foreach ($barangs as $birings) {
						$birings->id2 = $model->id;
						$birings->save();
					}
					$transaction->commit();
				} 
				catch (Exception $e) {
					$transaction->rollback();
				}
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'barangs' => $barangs
		));
	}

	public function actionInUpdate(){
		$dataProvider = new CActiveDataProvider('Sppb2');
		$this->render('InUpdate',array(
			'dataProvider'=>$dataProvider
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Sppb2');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Sppb2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sppb2']))
			$model->attributes=$_GET['Sppb2'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Sppb2 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Sppb2::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Sppb2 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sppb2-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionGetDepartemen()
	{
		$model=new Departemen('search');
		$model->unsetAttributes(); // clear any default values
		if (isset($_GET['Departemen']))
			$model->attributes=$_GET['Departemen'];
		$this->renderPartial('GetDepartemen',array(
			'model'=>$model,
			),false,true);
		
		Yii::app()->end();
	}

	public function actionGetBarang($key) // TAMBAH INI
	{
		$model=new Barang('search');
		$model->unsetAttributes(); // clear any default values
		if (isset($_GET['Barang']))
			$model->attributes=$_GET['Barang'];
		$this->renderPartial('GetBarang',array(
			'model'=>$model,
				'key'=>$key, // TAMBAH INI
			),false,true);
		
		Yii::app()->end();
	}

	public function actionSelectKode($id){
		$satu='';
		$dua='';

		$model=Departemen::model()->findByPk($id);
		$satu = $model->primaryKey;
		$dua = $model->kode_dept;
		$tiga = $model->nama_dept;
		echo CJSON::encode(array(
			'satu'=>$satu,
			'dua'=>$dua,
			'tiga'=>$tiga,
			));
		Yii::app()->end();
	}

	public function actionselectKode2($id){
		$satu='';
		$dua=array();
		$tigo=array();

		$model=Barang::model()->findByPk($id);
		$satu = $model->primaryKey;
		$dua = $model->kode_barang;
		$tigo = $model->nama_barang;
		$tiga = $model->satuan;
		echo CJSON::encode(array(
			'satu'=>$satu,
			'dua'=>$dua,
			'tigo'=>$tigo,
			'tiga'=>$tiga,
			));
		Yii::app()->end();
	}

	public function actionGetgudang()
	{
		$model=new Gudang('search');
		$model->unsetAttributes(); // clear any default values
		if (isset($_GET['Gudang']))
			$model->attributes=$_GET['Gudang'];
		$this->renderPartial('Getgudang',array(
			'model'=>$model,
			),false,true);
		
		Yii::app()->end();
	}

	public function actionSelectKode3($id){
		$satu='';
		$dua='';

		$model=Gudang::model()->findByPk($id);
		$satu = $model->primaryKey;
		$dua = $model->kode_gudang;
		echo CJSON::encode(array(
			'satu'=>$satu,
			'dua'=>$dua,
			));
		Yii::app()->end();
	}

	public function actionReport(){
		$model = Sppb2::model()->findAll("t.id = $_GET[id]");

		$html2pdf =Yii::app()->ePdf->HTML2PDF(
			'L','A5','en',false,'ISO-8859-15',array(10,5,10,5));
		$html2pdf->WriteHTML($this->renderPartial('Report',array(
			'model'=>$model,),true));
		$html2pdf->Output('Sppb.pdf');
	}
	
	public function actionLaporan(){
		$model = new Sppb2();
		$lapor = array();
		
		if (isset($_POST['Sppb2'])){
			$model->attributes = $_POST['Sppb2'];

			$criteria = new CDbCriteria();
			$criteria->addCondition('year = :year');
			$criteria->params = array(
				':year'=>$model->year,
				);
			$lapor = Sppb2::model()->findAll($criteria);
			$html2pdf =Yii::app()->ePdf->HTML2PDF(
			'L','A4','en',false,'ISO-8859-15',array(10,5,10,5));
			$html2pdf->WriteHTML($this->renderPartial('Rekapan',array(
			'lapor'=>$lapor,),true));
			$html2pdf->Output('Sppb.pdf');
		}
		$this->render('Laporan',array('model'=>$model,'lapor'=>$lapor));


	}

	public function actionRekapan(){
		$model = new Sppb2();
		$lapor = array();

		if (isset($_POST['Sppb2'])){
			$model->attributes = $_POST['Sppb2'];

			$criteria = new CDbCriteria();
			$criteria->addCondition('year = :year');
			$criteria->params = array(
				':year'=>$model->year,
				);
			$lapor = Sppb2::model()->findAll($criteria);
			

		}
		$this->render('Laporan',array('model'=>$model,'lapor'=>$lapor));
	}

	public function actionChart(){

		$sql = 'select count(permintaan_dept),permintaan_dept as statistik FROM sppb2 GROUP BY permintaan_dept';

		$dataProvider = new CSqlDataProvider($sql,array(
				'keyField'=>'id',
				));		
		$this->render('chart',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actiongetData(){
		
		//echo $_REQUEST['nilai'];
		$sql =  "select * from barang where kode_barang = '$_REQUEST[nilai]'";

		$barang = Yii::app()->db->createCommand($sql)->queryAll();
		
		//foreach ($barang as $key) {
			//echo $id = $key['id'];

		$json = array();
			$json['nama_barang']   = $barang[0]['nama_barang'];
			$json['satuan']        = $barang[0]['satuan'];
			
			echo json_encode($json);
			//echo $id[$a];
	
	
	//}
	}

		


	
	
}
