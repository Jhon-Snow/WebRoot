<?php
/* @var $this DocumentoController */
/* @var $model Documento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DOC_REU_correl'); ?>
		<?php echo $form->textField($model,'DOC_REU_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'DOC_REU_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOC_nombre'); ?>
		<?php echo $form->textField($model,'DOC_nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DOC_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOC_url'); ?>
		<?php echo $form->textField($model,'DOC_url',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DOC_url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->