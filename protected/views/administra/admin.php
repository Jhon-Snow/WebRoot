<?php
/* @var $this AdministraController */
/* @var $model Administra */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Administración'." ".Comunidad::model()->findByPk($_GET['id'])->COM_nombre,
);

$this->menu=array(
	array('label'=>'Cambiar Administrador', 'url'=>array('create','id'=>$_GET['id'])),
);
?>


<center>
<?php echo TbHtml::pageheader('Administraores',Comunidad::model()->findByPk($_GET['id'])->COM_nombre.' ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'administra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped bordered condensed',
	'columns'=>array(
		// 'ADM_USU_correl',
		array(	'name'=>'ADM_USU_correl',
				'value'=>'Usuario::model()->findByPk($data->ADM_USU_correl)->USU_nombre." ".Usuario::model()->findByPk($data->ADM_USU_correl)->USU_paterno'),
		'ADM_inicio',
		'ADM_fin',
		array(
        	// call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),'htmlOptions'=>array('style'=>'width:7%')
    		),
	),
)) ; ?>

