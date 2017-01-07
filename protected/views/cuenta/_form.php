<?php
/* @var $this CuentaController */
/* @var $model Cuenta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuenta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CUE_fecha'); ?>
		<?php echo $form->textField($model,'CUE_fecha'); ?>
		<?php echo $form->error($model,'CUE_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CUE_estado'); ?>
		<?php echo $form->textField($model,'CUE_estado',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'CUE_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CUE_saldo'); ?>
		<?php echo $form->textField($model,'CUE_saldo'); ?>
		<?php echo $form->error($model,'CUE_saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CUE_HOG_correl'); ?>
		<?php echo $form->textField($model,'CUE_HOG_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CUE_HOG_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CUE_fin'); ?>
		<?php echo $form->textField($model,'CUE_fin'); ?>
		<?php echo $form->error($model,'CUE_fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->