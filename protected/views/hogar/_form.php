<?php
/* @var $this HogarController */
/* @var $model Hogar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'hogar-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->textFieldGroup($model,'HOG_pasaje',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'HOG_numero',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->numberFieldGroup($model,'HOG_metros',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->numberFieldGroup($model,'HOG_habitaciones',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->numberFieldGroup($model,'HOG_bagnos',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->dropDownListGroup($model,'HOG_estado',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Habilitado'=>'Habilitado','No Habilitado'=>'No Habilitado'),
				'htmlOptions' => array('empty'=>'Seleccione Estado'),
			)
		));  ?>
		<?php echo $form->dropDownListGroup($model,'HOG_habitado',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Habitado'=>'Habitado','No Habitado'=>'No Habitado'),
				'htmlOptions' => array('empty'=>'Seleccione Estado'),
			)
		));  ?>
		<?php echo $form->numberFieldGroup($model,'HOG_porcentaje',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
				'widgetOptions' => array(
					'htmlOptions' => array('step'=>'any'),
				)));?>


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