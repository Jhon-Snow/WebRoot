<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Servicios de '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre,
);

$this->menu=array(
	array('label'=>'Registrar Servicio', 'url'=>array('create','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Sevicios '.' " '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre.' " ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'servicios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped bordered condensed',
	'columns'=>array(
		// 'SER_correl',
		// 'SER_COM_correl',
		// 'SER_PRO_correl',
		// 'SER_PRO_nombre',
		array('name'=>'SER_PRO_correl','value'=>'Proveedor::model()->findByPk($data->SER_PRO_correl)->PRO_nombre'
			),
		'SER_nombre',
		'SER_tipo',
		'SER_monto',
		'SER_estado',
		'SER_fecha',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
	),
)); ?>
