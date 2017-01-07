<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Ingresos de '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre,
);

$this->menu=array(
	array('label'=>'Registrar Ingreso', 'url'=>array('create','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Ingresos de  '.' " '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre.' " ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'ingreso-grid',
	'type' => 'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'ING_correl',
		// 'ING_COM_correl',
		'ING_fecha',
		'ING_otros',
		'ING_multas',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
	),
)); ?>
