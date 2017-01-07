<?php
/* @var $this CuentaController */
/* @var $model Cuenta */
$hogar=Hogar::model()->findByPk($_GET['id']);
$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	Comunidad::model()->findByPk($hogar->HOG_COM_correl)->COM_nombre=>array('//Hogar/admin','id'=>$hogar->HOG_COM_correl),
	'Administrar Cuentas'
);

$this->menu=array(
	array('label'=>'Registrar Cuenta', 'url'=>array('create','id'=>$_GET['id'])),
);


?>
<center>
<?php echo TbHtml::pageheader('Administrar','Cuenta'." ".$hogar->HOG_pasaje." ".$hogar->HOG_numero,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'cuenta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped bordered condensed',
	'columns'=>array(
		// 'CUE_correl',
		// 'CUE_HOG_correl',
		'CUE_fecha',
		'CUE_fin',
		'CUE_saldo',
		'CUE_estado',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),'htmlOptions'=>array('style'=>'width:10%')
    		),
	),
)); ?>