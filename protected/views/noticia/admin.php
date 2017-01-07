<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Noticias de '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre,
);

$this->menu=array(
	array('label'=>'Registrar Noticia', 'url'=>array('create','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Noticias '.' " '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre.' " ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'noticia-grid',
	'dataProvider'=>$model->search(),
	'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		array(	'name'=>'NOT_imagen',
				'value'=>array($this,'renderImage'),
				'filter'=>false,
				'htmlOptions'=>array('style'=>'width:20%')),
		'NOT_tipo',
		'NOT_asunto',
		'NOT_detalle',
		'NOT_fecha',
		'NOT_estado',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
	),
)); ?>
