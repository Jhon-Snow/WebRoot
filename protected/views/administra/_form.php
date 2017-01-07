<?php
/* @var $this AdministraController */
/* @var $model Administra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'servicios-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>


	<?php echo $form->dropDownListGroup($model,'ADM_USU_correl',array(
			'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions'=>array('data'=>CHtml::listData(Usuario::model()->findAllByAttributes(array('USU_role'=>"Administrador")),'USU_correl', 'USU_nombre'),
				'htmlOptions' => array('empty'=>'Seleccione Administrador')),
			));?>

	<?php echo $form->datePickerGroup($model,'ADM_inicio',array(
			'widgetOptions' => array(
				'options' => array(
					'language' => 'es',
					'format'=>'yyyy-mm-dd',
					 'autoclose'=> true,)
				,),
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-5',
			),
			'hint' => 'Si no ingresa fecha se tomara la fecha de hoy',
			'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); 
		?>

		<?php
		if ($this->action->id=="update") {
			 echo $form->datePickerGroup($model,'ADM_fin',array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'es',
						'format'=>'yyyy-mm-dd',
						 'autoclose'=> true,
						 ),
					'htmlOptions'=>array('hidden'),
					),
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',

				),
				'hint' => 'Si no ingresa fecha se tomara la fecha de hoy',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>',
				)
			); 
		}
		?>

	<div class="row buttons">
		<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'primary',
				'label' => 'Aceptar',
				'htmlOptions'=>array(
					'style' => 'margin-left: 26%;',
					)
			)
		); ?>
		<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'reset', 
				'label' => 'Borrar',
				'htmlOptions'=>array(
					'style' => 'margin-left: 2%;',
					)
				)
		); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->