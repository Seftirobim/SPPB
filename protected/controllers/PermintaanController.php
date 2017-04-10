<?php

class PermintaanController extends Controller
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
				'actions'=>array('index','view','Notif','Suara'),
				//'users'=>array('admin','general_affair'),
				'expression'=>"Yii::app()->user->getLevel()=='2'"
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','view','update','Cari'),
				//'users'=>array('DF','WV','UM','PRC','BO','COM','MKT','EXP','ACC','LTK','general_affair'),
				'expression'=>"Yii::app()->user->getLevel()=='3'"
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update','Confirm','Daftar','DeleteBanyak','Confirm2','update2','Cari','Cari2'),
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
		$model=new Permintaan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Permintaan']))
		{
			$model->attributes=$_POST['Permintaan'];
				if($model->status == ""){
				$model->status = 'Belum Dikonfirmasi';
				$model->lama_waktu ='-';
				$model->save();
				} 


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

		if(isset($_POST['Permintaan']))
		{
			$model->attributes=$_POST['Permintaan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	// Untuk Update Status
	public function actionUpdate2($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Permintaan']))
		{
			$model->attributes=$_POST['Permintaan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update2',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('Permintaan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Permintaan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Permintaan']))
			$model->attributes=$_GET['Permintaan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDaftar()
	{
		$model=new Permintaan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Permintaan']))
			$model->attributes=$_GET['Permintaan'];

		$this->render('daftar',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Permintaan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Permintaan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Permintaan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='permintaan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function getNamaDept()
	{
		$kodeArray = CHtml::listData(Departemen::model()->findAll(),'nama_dept','nama_dept');
		return $kodeArray;
	}
	public function getName(){
		$user = '';
		if (Yii::app()->user->name == 'DF' || Yii::app()->user->name == 'df' ){
			$user = 'Dyeing Finishing';
		}
		elseif (Yii::app()->user->name == 'WV' || Yii::app()->user->name == 'wf'){
			$user = 'Weaving';
		}
		elseif (Yii::app()->user->name == 'UM' || Yii::app()->user->name == 'um'){
			$user = 'Umum';
		}
		elseif (Yii::app()->user->name == 'PRC' || Yii::app()->user->name == 'prc'){
			$user = 'Purchasing';
		}
		elseif (Yii::app()->user->name == 'BO' || Yii::app()->user->name == 'bo'){
			$user = 'Boiler';
		}
		elseif (Yii::app()->user->name == 'COM' || Yii::app()->user->name == 'mkt'){
			$user = 'Compresor';
		}
		elseif (Yii::app()->user->name == 'MKT' || Yii::app()->user->name == 'mkt'){
			$user = 'Marketing';
		}
		elseif (Yii::app()->user->name == 'EXP' || Yii::app()->user->name == 'exp'){
			$user = 'Expedisi';
		}
		elseif (Yii::app()->user->name == 'ACC' || Yii::app()->user->name == 'acc'){
			$user = 'Accounting';
		}
		elseif (Yii::app()->user->name == 'LTK' || Yii::app()->user->name == 'ltk'){
			$user = 'Listrik';
		}
		return $user;
	}

	public function actionConfirm($id){
		$model=Permintaan::model()->findByPk($id);
		if($model){
				$model->status = 'sudah dibuat';
				$model->lama_waktu ='20 Menit / Lebih';
				$model->save();
				$this->redirect('index.php');
		}
	}

	public function actionDeleteBanyak()
	{
	    if(!Yii::app()->request->isPostRequest)
	        throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	     
	    if(isset($_POST['id']) && $_POST['id']!=='')
	    {
	        foreach($_POST['id'] as $key=>$val)
	            $this->loadModel($val)->delete();
	     
	        Yii::app()->user->setFlash('success','<strong>Berhasil</strong> Anda berhasil menghapus.');
	    }
	    else
	        Yii::app()->user->setFlash('error','<strong>Gagal</strong> Anda belum memilih data untuk di hapus.');
	    $this->redirect(array('daftar'));
	}

	public function actionConfirm2($id){
		$model=Permintaan::model()->findByPk($id);
		if($model){
				$model->status = 'Barang Kosong';
				$model->lama_waktu ='-';
				$model->save();
				$this->redirect(array('daftar'));
		}
	}

	public function actionCari(){
		$model = new Permintaan();
		$lapor = array();

		if (isset($_POST['Permintaan'])){
			$model->attributes = $_POST['Permintaan'];

			$criteria = new CDbCriteria();
			$criteria->addCondition('no_per = :no_per');
			$criteria->params = array(
				':no_per'=>$model->no_per,
				);
			$lapor = Permintaan::model()->findAll($criteria);
			

		}
		$this->render('Cari',array('model'=>$model,'lapor'=>$lapor));
	}

	public function actionCari2(){
		$model = new Permintaan();
		$lapor = array();

		if (isset($_POST['Permintaan'])){
			$model->attributes = $_POST['Permintaan'];

			$criteria = new CDbCriteria();
			$criteria->addCondition('status = :status');
			$criteria->params = array(
				':status'=>$model->status,
				);
			$lapor = Permintaan::model()->findAll($criteria);
			

		}
		$this->render('Cari2',array('model'=>$model,'lapor'=>$lapor));
	}

	public function actionNotif(){
		$sql = YII::app()->db->createCommand('select * from permintaan where status = "Belum Dikonfirmasi"')->queryAll();
		$hitung = count($sql);

		if($hitung){
			echo 
				"<div class='alert in alert-block fade alert-info'>
				<h4><span class='badge badge-important'>$hitung</span> Permintaan Silahkan Untuk Segera Di Proses</h4>
				"
				
				;
		}else{
			echo "";
		}
	}

	public function actionSuara(){
		$sql = YII::app()->db->createCommand('select * from permintaan where status = "Belum Dikonfirmasi"')->queryAll();
		$hitung = count($sql);

		if($hitung){
			echo "";
		}else{
			echo "";
		}
	}


}
