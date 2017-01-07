<?php

class ProveedorController extends Controller
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
		//Usuarios 1:Super Usuario/ 2: Administrador/ 3: Residente/ 4:Conserje
		return array(
			array('allow',  // Permisos de Usuario "Super Usuario"
				'actions'=>array('admin','view','create','update','delete'),
				'users'=>array('Super Usuario'),
			),
			array('allow', // Permisos de Usuario "Administrador"
				'actions'=>array('create','update','admin'),
				'users'=>array('Administrador'),
			),
			array('allow', // Permisos de Usuario "Residente"
				'actions'=>array(''),
				'users'=>array('3'),
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
		$model=new Proveedor;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Proveedor']))
		{
			$aux=$model->PRO_logo;
			$model->attributes=$_POST['Proveedor'];
			if(CUploadedFile::getInstance($model,'PRO_logo')!=null){
				$imagen=CUploadedFile::getInstance($model,'PRO_logo');
				$model->PRO_logo=$imagen->name;
			}
			else
				$model->PRO_logo=$aux;
			if($model->save()){
				if(CUploadedFile::getInstance($model,'PRO_logo')!=null)
					$imagen->saveAs('images/proveedor/'.$model->PRO_correl.'.jpg');
				$this->redirect(array('admin'));
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

		if(isset($_POST['Proveedor']))
		{
			$aux=$model->PRO_logo;
			$model->attributes=$_POST['Proveedor'];
			if(CUploadedFile::getInstance($model,'PRO_logo')!=null){
				$imagen=CUploadedFile::getInstance($model,'PRO_logo');
				$model->PRO_logo=$imagen->name;
			}
			else
				$model->PRO_logo=$aux;
			if($model->save()){
				if(CUploadedFile::getInstance($model,'PRO_logo')!=null)
					$imagen->saveAs('images/proveedor/'.$model->PRO_correl.'.jpg');
				$this->redirect(array('admin'));
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
		$model=$this->loadModel($id);
		$model->PRO_estado="No Habilitado";
		if ($model->save()) 
			$this->redirect(array('admin'));


		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		// if(!isset($_GET['ajax']))
		// 	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Proveedor');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Proveedor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Proveedor']))
			$model->attributes=$_GET['Proveedor'];

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
        			array('label'=>'Editar', 'url'=>array('update', 'id'=>$data->PRO_correl)),
        			array('label'=>'Eliminar', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$data->PRO_correl),'confirm'=>'Esta seguro de borrar este item?'),'visible'=>Yii::app()->user->role=="Super Usuario"),
        			)
        		// 'visible'=>Usuario::model()->findByPk(Yii::app()->user->id)->usu_rol!="view"
    		),
        	),
    	)
	);
		}

	public function renderImage($data, $row) {
		if (is_file('images/proveedor/'.$data->PRO_correl.".jpg")) {
			echo "<div class=marco><div class=marco-imagen><center><img src=".Yii::app()->request->baseUrl."/images/proveedor/".$data->PRO_correl.".jpg width=100%%  style=border-radius:3px></div></div>";
		}
		else echo "<div class=marco><div class=marco-imagen><center><img src=".Yii::app()->request->baseUrl.
			"/images/proveedor/def.png width=60%%  style=border-radius:3px></div></div>";
   		}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Proveedor the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Proveedor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Proveedor $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='proveedor-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
