<?php

class SppbController extends Controller
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

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','InUpdate','GetDepartemen','SelectKode','GetBarang','selectKode2','Getgudang','SelectKode3'),
				'users'=>array('superadmin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('superadmin'),
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
		$model=new Sppb;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		/*if(isset($_POST['Sppb']))
		{
			$total = count($_POST['kd_barang']);
			for ($i = 0; $i <= $total; $i++)
			{
				if(isset($_POST['kd_barang'][$i]))
				{
					$hihi = new Sppb();
					$hihi->kd_barang = $_POST['kd_barang'][$i];
					$hihi->nm_barang = $_POST['nm_barang'][$i];
					$hihi->satuan = $_POST['satuan'][$i];
					$hihi->qty_request = $_POST['qty_request'][$i];
					$hihi->qty_realisasi = $_POST['qty_realisasi'][$i];
					$hihi->keterangan = $_POST['keterangan'][$i];
					$hihi->save();
				}
			}
			$this->redirect(array('view','id'=>$model->id));
		}*/
		

		
		if(isset($_POST['Sppb']))
		{
			$model->attributes=$_POST['Sppb'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sppb']))
		{
			$model->attributes=$_POST['Sppb'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionInUpdate(){
		$dataProvider = new CActiveDataProvider('Sppb');
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
		$dataProvider=new CActiveDataProvider('Sppb');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Sppb('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sppb']))
			$model->attributes=$_GET['Sppb'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Sppb the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Sppb::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Sppb $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sppb-form')
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

	public function actionGetBarang()
	{
		$model=new Barang('search');
		$model->unsetAttributes(); // clear any default values
		if (isset($_GET['Barang']))
			$model->attributes=$_GET['Barang'];
		$this->renderPartial('GetBarang',array(
			'model'=>$model,
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
		$dua='';

		$model=Barang::model()->findByPk($id);
		$satu = $model->primaryKey;
		$dua = $model->kode_barang;
		$tigo = $model->nama_barang;
		echo CJSON::encode(array(
			'satu'=>$satu,
			'dua'=>$dua,
			'tigo'=>$tigo,
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
		$dua = $model->nama_gudang;
		echo CJSON::encode(array(
			'satu'=>$satu,
			'dua'=>$dua,
			));
		Yii::app()->end();
	}

	
}
