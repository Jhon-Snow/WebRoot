<?php

class NoticiaController extends Controller
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
		$pass=array('');
		$comunidad=null;
		if (isset($_GET['id']))
			$comunidad=$_GET['id'];
		if (Yii::app()->user->name=="Administrador") {
			if (Administra::model()->findByAttributes(array('ADM_USU_correl'=>Yii::app()->user->correl,
				'ADM_fin'=>null,'ADM_COM_correl'=>$comunidad))!=null)
				$pass=array('admin','update','update');
			else
				$pass=array('');
		}
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('admin','view','create','update','delete'),
				'users'=>array('Super Usuario'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>$pass,
				'users'=>array('Administrador'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('Residente'),
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
	public function actionCreate($id)
	{
		$model=new Noticia;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Noticia']))
		{
			$model->attributes=$_POST['Noticia'];
			$model->NOT_COM_correl=$id;
			if ($model->NOT_fecha==null)
				$model->NOT_fecha=DATE('Y-m-d');
			if(CUploadedFile::getInstance($model,'NOT_imagen')!=null){
				$imagen=CUploadedFile::getInstance($model,'NOT_imagen');
				$model->NOT_imagen=$imagen->name;
			}
			if($model->save()){
				if(CUploadedFile::getInstance($model,'NOT_imagen')!=null)
					$imagen->saveAs('images/noticia/'.$model->NOT_correl.'.jpg');	
				$this->redirect(array('admin','id'=>$id));
			}
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

		if(isset($_POST['Noticia']))
		{
			$model->attributes=$_POST['Noticia'];
			if ($model->NOT_fecha==null)
				$model->NOT_fecha=DATE('Y-m-d');
				if(CUploadedFile::getInstance($model,'NOT_imagen')!=null){
					$imagen=CUploadedFile::getInstance($model,'NOT_imagen');
					$model->NOT_imagen=$imagen->name;
				}
			if($model->save()){
				if(CUploadedFile::getInstance($model,'NOT_imagen')!=null)
					$imagen->saveAs('images/noticia/'.$model->NOT_correl.'.jpg');	
				$this->redirect(array('admin','id'=>$id));
			}
		}
		$this->render('update',array(
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
		$var=$this->loadModel($id)->NOT_COM_correl;
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		// if(!isset($_GET['ajax']))
		// 	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin','id'=>$var));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Noticia');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id)
	{
		$model=new Noticia('search');
		$model->unsetAttributes();  // clear any default values
		$model->NOT_COM_correl=$id;
		if(isset($_GET['Noticia']))
			$model->attributes=$_GET['Noticia'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function renderButtons($data) {
		$this->widget(
    		'booster.widgets.TbButtonGroup',
    		array(
	        'size' => 'small',
	        'context' => 'info',
	        'buttons' => array(
	            array(
        		'label' => '',
        		'icon'=>'glyphicon glyphicon-cog',
        		'items' => array(
        			array('label'=>'Editar', 'url'=>array('update', 'id'=>$data->NOT_correl)),
        			array('label'=>'Eliminar', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$data->NOT_correl),'confirm'=>'Esta seguro de borrar este item?')),
        			)
        		// 'visible'=>Usuario::model()->findByPk(Yii::app()->user->id)->usu_rol!="view"
    		),
        	),
    	)
	);
		}

	public function renderImage($data, $row) {
			if (is_file('images/Noticia/'.$data->NOT_correl.".jpg")) {
				echo "<div class=marco><div class=marco-imagen><center><img src=".Yii::app()->request->baseUrl."/images/Noticia/".$data->NOT_correl.".jpg width=100%%  style=border-radius:3px></div></div>";
			}
			else echo "<div class=marco><div class=marco-imagen><center><img src=".Yii::app()->request->baseUrl.
					"/images/Noticia/def.png width=60%%  style=border-radius:3px></div></div>";

   		}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Noticia the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Noticia::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Noticia $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='noticia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
