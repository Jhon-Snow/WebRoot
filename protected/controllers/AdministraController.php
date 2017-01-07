<?php

class AdministraController extends Controller
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
				'actions'=>array('index','view','create','update','delete','admin'),
				'users'=>array('Super Usuario'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Administra;
		if (Administra::model()->findByAttributes(array('ADM_fin'=>null))) {
			$antiguo=Administra::model()->findByAttributes(array('ADM_fin'=>null));
		}
		else
			$antiguo=null;

		if(isset($_POST['Administra']))
		{
			$model->attributes=$_POST['Administra'];
			$model->ADM_COM_correl=$id;
			if($model->save()){
				if($antiguo!=null){
					$antiguo->ADM_fin=$model->ADM_inicio;
					$antiguo->save();
				}
				$this->redirect(array('admin','id'=>$model->ADM_COM_correl));
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

		if(isset($_POST['Administra']))
		{
			$model->attributes=$_POST['Administra'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->ADM_COM_correl));
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
		$dataProvider=new CActiveDataProvider('Administra');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id)
	{
		$model=new Administra('search');
		$model->unsetAttributes();  // clear any default values
		$model->ADM_COM_correl=$id;
		if(isset($_GET['Administra']))
			$model->attributes=$_GET['Administra'];

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
						'icon'=>'glyphicon glyphicon-cog',
						'items' => array(
							array('label'=>'Editar', 'url'=>array('update', 'id'=>$data->ADM_correl)),
						)
					),
				),
			)
		);
		}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Administra the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Administra::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Administra $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='administra-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
