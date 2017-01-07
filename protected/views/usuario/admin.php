<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	// 'Usuarios'=>array('index'),
	'Usuarios',
);

$this->menu=array(
	// array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Registrar usuario', 'url'=>array('create')),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Usuarios',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>


<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped bordered condensed',
	'columns'=>array(
		// 'USU_correl',
		// 'USU_username',
		// 'USU_password',
		'USU_nombre',
		'USU_paterno',
		'USU_materno',
		'USU_rut',
		'USU_role',
		// array(	'name'=>'USU_rol',
		// 		'value'=>Usuario::model()->getusu_rol(),
		// 		'filter'=>false,
		// 		),
		// 'USU_fono',
		'USU_email',
		'USU_estado',
		// array(	'name'=>'USU_state',
		// 		'value'=>Usuario::model()->getusu_estado(),
		// 		'filter'=>false,
		// 		),
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
		// array(
		// 	'class'=>'CButtonColumn',
		// ),
	),
)); ?>