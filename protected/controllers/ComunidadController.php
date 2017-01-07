<?php

class ComunidadController extends Controller
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
			// 'postOnly + delete', // we only allow deletion via POST request
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
			if (Administra::model()->findAllByAttributes(array('ADM_USU_correl'=>Yii::app()->user->correl,
				'ADM_fin'=>null,'ADM_COM_correl'=>$comunidad))!=null)
				$pass=array('admin','update','view');
			else
				$pass=array('admin');
		}
		elseif (Yii::app()->user->name=="Residente") {
			$pass=array('home','noticias');
		}
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','admin','delete'),
				'users'=>array('Super Usuario'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>$pass,
				'users'=>array('Administrador'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>$pass,
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
	public function actionCreate()
	{
		$model=new Comunidad;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Comunidad']))
		{
			$model->attributes=$_POST['Comunidad'];
			if ($model->COM_fecha==null)
				$model->COM_fecha=DATE('Y-m-d');
			if(CUploadedFile::getInstance($model,'COM_portada')!=null){
				$imagen=CUploadedFile::getInstance($model,'COM_portada');
				$model->COM_portada=$imagen->name;
			}
			if($model->save()){
				if(CUploadedFile::getInstance($model,'COM_portada')!=null)
					$imagen->saveAs('images/comunidad/'.$model->COM_correl.'.jpg');
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

		if(isset($_POST['Comunidad']))
		{
			$aux=$model->COM_portada;
			$model->attributes=$_POST['Comunidad'];
			if ($model->COM_fecha==null)
				$model->COM_fecha=DATE('Y-m-d');
			if(CUploadedFile::getInstance($model,'COM_portada')!=null){
				$imagen=CUploadedFile::getInstance($model,'COM_portada');
				$model->COM_portada=$imagen->name;
			}
			else
				$model->COM_portada=$aux;
			if($model->save()){
				if(CUploadedFile::getInstance($model,'COM_portada')!=null)
					$imagen->saveAs('images/comunidad/'.$model->COM_correl.'.jpg');
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
		$model->COM_estado="No Habilitado";
		if ($model->save()) 
			$this->redirect(array('admin'));

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
	// 	if(!isset($_GET['ajax']))
	// 		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	// }
	}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Comunidad');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
		public function actionHome()
	{
		$model=new Comunidad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Comunidad']))
			$model->attributes=$_GET['Comunidad'];

		$this->render('home',array(
			'model'=>$model,
		));
	}

	public function actionNoticias()
	{
		$model=new Comunidad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Comunidad']))
			$model->attributes=$_GET['Comunidad'];

		$this->render('noticias',array(
			'model'=>$model,
		));
	}
	public function actionAdmin()
	{
		$model=new Comunidad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Comunidad']))
			$model->attributes=$_GET['Comunidad'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function renderButtons($data) {
		$this->widget(
			'booster.widgets.TbButtonGroup',
			array(
				'size' => 'small',
				'context' => 'success',
				'buttons' => array(
					array(
						'icon'=>'glyphicon glyphicon-th',
						'items' => array(
							array('label'=>'Comunidad', 'url'=>array('//hogar/admin', 'id'=>$data->COM_correl)),
							array('label'=>'Servicio', 'url'=>array('//servicio/admin', 'id'=>$data->COM_correl)),
							array('label'=>'Noticias', 'url'=>array('//noticia/admin', 'id'=>$data->COM_correl)),
							array('label'=>'Reuniones', 'url'=>array('//reunion/admin', 'id'=>$data->COM_correl)),
							array('label'=>'Ingresos', 'url'=>array('//ingreso/admin', 'id'=>$data->COM_correl)),
							array('label'=>'Administracion', 'url'=>array('//administra/admin', 'id'=>$data->COM_correl)),
						)
					),
				),
			)
		);
		$this->widget(
			'booster.widgets.TbButtonGroup',
			array(
				'size' => 'small',
				'context' => 'info',
				'buttons' => array(
					array(
						'icon'=>'glyphicon glyphicon-cog',
						'items' => array(
							array('label'=>'Editar', 'url'=>array('update', 'id'=>$data->COM_correl)),
							array('label'=>'Eliminar', 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$data->COM_correl),'confirm'=>'Esta seguro de borrar este item?')),
						)
					),
				),
			)
		);
		}

		public function renderImage($data, $row) {
			if (is_file('images/comunidad/'.$data->COM_correl.".jpg")) {
				echo "<div class=marco><div class=marco-imagen><center><img src=".Yii::app()->request->baseUrl."/images/comunidad/".$data->COM_correl.".jpg width=100%%  style=border-radius:3px></div></div>";
			}
			else echo "<div class=marco><div class=marco-imagen><center><img src=".Yii::app()->request->baseUrl.
					"/images/comunidad/def.png width=60%%  style=border-radius:3px></div></div>";

   		}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Comunidad the loaded model
	 * @throws CHttpException
	 */
	public function cargaNoticia($id){

		$noticias= Noticia::model()->findAllByAttributes(array('NOT_COM_correl'=>$id,'NOT_estado'=>1));
		$imagen="<img src=".Yii::app()->request->baseUrl."/images/comunidad/5.jpg width=520px/>";
		$impresa=" ";
		foreach ($noticias as $key => $value) {
			if (is_file('images/Noticia/'.$value->NOT_correl.'.jpg'))$valor=$value->NOT_correl;
			else
				$valor=0;
			$impresa=$impresa."<div class=marco-noticia><div class=marco-imagen><center><img src=".Yii::app()->request->baseUrl.
			"/images/Noticia/".$valor.".jpg width=100%%  style=border-radius:5px></div><div class =marco-titulo><h3>".
			$value->NOT_asunto."</div><h5><small>".$value->NOT_fecha."</small> ( ir )</h2></small><h5>".$value->NOT_detalle.
			"<br></div><br>";
		}
		// echo $impresa;
		if ($noticias==null) $impresa="<h3>No existen noticias";
		return $impresa;
	}

	public function loadModel($id)
	{
		$model=Comunidad::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Comunidad $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='comunidad-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
