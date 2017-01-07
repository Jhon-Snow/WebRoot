<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'HOR_USU_correl'); ?>
		<?php echo $form->textField($model,'HOR_USU_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HOR_USU_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOR_entrada'); ?>
		<?php echo $form->textField($model,'HOR_entrada'); ?>
		<?php echo $form->error($model,'HOR_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOR_salida'); ?>
		<?php echo $form->textField($model,'HOR_salida'); ?>
		<?php echo $form->error($model,'HOR_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOR_fecha'); ?>
		<?php echo $form->textField($model,'HOR_fecha'); ?>
		<?php echo $form->error($model,'HOR_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->