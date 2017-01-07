<?php
/* @var $this MultaController */
/* @var $model Multa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MUL_correl'); ?>
		<?php echo $form->textField($model,'MUL_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MUL_USU_correl'); ?>
		<?php echo $form->textField($model,'MUL_USU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MUL_glosa'); ?>
		<?php echo $form->textField($model,'MUL_glosa',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MUL_detalle'); ?>
		<?php echo $form->textArea($model,'MUL_detalle',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MUL_fecha'); ?>
		<?php echo $form->textField($model,'MUL_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->