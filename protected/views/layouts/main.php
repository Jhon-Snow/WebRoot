<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	    <!-- CSS dependencies -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/da897af5/bootstrap/css/bootstrap.min.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="container" id="page">

<!-- 	<div id="header">
		<div id="logo"><?php 
		echo CHtml::encode(Yii::app()->name); 
		?></div>
	</div>< header -->

	<div id="mainmenu">
	<?php 

	$valor=null;
	$reside=null;
	if (Yii::app()->user->isGuest)
		$role=null;
	else
		$role=Yii::app()->user->role;

	if ($role=="Residente"&&Reside::model()->findAllByAttributes(array('RES_USU_correl'=>Yii::app()->user->correl,'RES_fin'=>null))!=null) {
		$reside=Reside::model()->findAllByAttributes(array('RES_USU_correl'=>Yii::app()->user->correl,'RES_fin'=>null));
		if (count($reside)==1) {
			$valor=Hogar::model()->findByPk($reside[0]->RES_HOG_correl)->HOG_COM_correl;
		}
	}
	// echo "<br><br><br>";
	// var_dump(count(Administracion::model()->findAll()));

	$this->widget(
		'booster.widgets.TbNavbar',
			array(
				'type' => null, // null or 'inverse'
				'brand' => 'Comasys',
				'brandUrl' => '',
				'collapse' => true, // requires bootstrap-responsive.css
				'fixed' => 'top',
				'fluid' => true,
				// 'htmlOptions'=>array('style'=>'border:ridge;padding-left:20px;padding-ritgh:20px;background-color:none;opacity: 0.7;font-style: oblique;font-weight: bold;a:hover'),
				'items' => array(
					array(
						'class' => 'booster.widgets.TbMenu',
						'type' => 'navbar',
						'items' => array(
							array(
								'label'=>'Proveedor',
								'visible'=>$role=="Administrador"||$role=="Super Usuario",
								'items' => array(
								array(
									'label'=>'Administrar',
									'url'=>array(
										'/proveedor/admin'
										)
									),
								array(
									'label'=>'Registrar',
									'url'=>array(
										'/proveedor/create'
										)
									),
								)),
							array(
								'label'=>'Comunidades',
								'visible'=>$role=="Administrador",
								'url'=>array(
											'/comunidad/admin'
											)
								),
							array(
								'label'=>'Mi Comunidad',
								'visible'=>$role=="Residente",
								'items' => array(
									array('label'=>'Noticias',
										'url'=>array(
											'/comunidad/noticias','id'=>$valor
											)
										),
									array(
										'label'=>'Reuniones',
										'url'=>array(
											'/comunidad/create'
											)
										),
							)),
							array(
								'label'=>'Comunidades',
								'visible'=>$role=="Super Usuario",
								'items' => array(
									array('label'=>'Administrar',
										'url'=>array(
											'/comunidad/admin'
											)
										),
									array(
										'label'=>'Registrar',
										'url'=>array(
											'/comunidad/create'
											)
										),
							)),
							array(
								'label'=>'Usuarios',
								'visible'=>$role=="Super Usuario",
								'items' => array(
									array(
										'label'=>'Administrar',
										'url'=>array(
											'/usuario/admin'
											)
										),
									array(
										'label'=>'Registrar',
										'url'=>array(
											'/usuario/create'
											)
										),
							)),
							array(
								'label' => 'Login',
								'url' => array(
									'/site/login'
								),
							'htmlOptions' => array('class' => 'pull-right'),
							'visible' => Yii::app()->user->isGuest,
							),
							array(
								'label' => 'Logout (' . Yii::app()->user->name . ')',
								'htmlOptions' => array('class' => 'pull-right'),
								'url' => array(
								'/site/logout'
							),
						'visible' => !Yii::app()->user->isGuest
						)
					),
				),
			),
		)
	);
?>
	</div><!-- mainmenu -->
	<br><br><br>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget( 'booster.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>


	<div class="clear"></div>

	<div id="footer">
		<br><br><br><br><br><center>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/> 
		<?php 
		echo Yii::powered(); 
		?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
