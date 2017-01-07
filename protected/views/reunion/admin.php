<?php
/* @var $this ReunionController */
/* @var $model Reunion */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Reuniones de '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre,
);

$this->menu=array(
	array('label'=>'Registrar Reunion', 'url'=>array('create','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Reuniones '.' " '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre.' " ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'reunion-grid',
	'dataProvider'=>$model->search(),
	'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		// 'REU_correl',
		// 'REU_COM_correl',
		'REU_tipo',
		'REU_asunto',
		'REU_detalle',
		'REU_asistencia',
		'REU_fecha',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
	),
)); ?>
