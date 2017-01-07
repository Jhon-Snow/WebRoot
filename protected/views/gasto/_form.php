<?php
/* @var $this GastoController */
/* @var $model Gasto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'gasto-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->textFieldGroup($model,'GAS_nombre',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'GAS_monto',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>

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