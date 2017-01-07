<?php
/* @var $this ResideController */
/* @var $model Reside */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reside-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RES_USU_correl'); ?>
		<?php echo $form->textField($model,'RES_USU_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RES_USU_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RES_HOG_correl'); ?>
		<?php echo $form->textField($model,'RES_HOG_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'RES_HOG_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RES_inicio'); ?>
		<?php echo $form->textField($model,'RES_inicio'); ?>
		<?php echo $form->error($model,'RES_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RES_fin'); ?>
		<?php echo $form->textField($model,'RES_fin'); ?>
		<?php echo $form->error($model,'RES_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RES_tipo'); ?>
		<?php echo $form->textField($model,'RES_tipo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RES_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->