<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IMA_COM_correl'); ?>
		<?php echo $form->textField($model,'IMA_COM_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'IMA_COM_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IMA_glosa'); ?>
		<?php echo $form->textField($model,'IMA_glosa',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'IMA_glosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IMA_url'); ?>
		<?php echo $form->textField($model,'IMA_url',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'IMA_url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->