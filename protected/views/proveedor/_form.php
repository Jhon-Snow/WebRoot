<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'proveedor-form',	
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->textFieldGroup($model,'PRO_nombre',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
				<?php echo $form->fileFieldGroup($model, 'PRO_logo',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
			)
		); ?>
		<?php echo $form->textFieldGroup($model,'PRO_email',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'PRO_fono',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->dropDownListGroup($model,'PRO_estado',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Habilitado'=>'Habilitado','No Habilitado'=>'No Habilitado'),
				'htmlOptions' => array('empty'=>'Seleccione Estado'),
			)
		));  ?>

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