<?php
/* @var $this IngresoController */
/* @var $model Ingreso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'ingreso-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->textFieldGroup($model,'ING_glosa',array('wrapperHtmlOptions' => array('class' => 'col-sm-6',),));?>
		<?php echo $form->textAreaGroup($model,'ING_detalle',array('wrapperHtmlOptions' => array('class' => 'col-sm-6',),));?>
		<?php echo $form->datePickerGroup($model,'ING_fecha',array(
			'widgetOptions' => array(
				'options' => array(
					'language' => 'es',
					'format'=>'yyyy-mm-dd',
					 'autoclose'=> true,)
				,),
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-6',
			),
			'hint' => 'Si no ingresa fecha se tomara la fecha de hoy',
			'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>

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