<?php
/* @var $this ReunionController */
/* @var $model Reunion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'REU_correl'); ?>
		<?php echo $form->textField($model,'REU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REU_COM_correl'); ?>
		<?php echo $form->textField($model,'REU_COM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REU_asunto'); ?>
		<?php echo $form->textField($model,'REU_asunto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REU_detalle'); ?>
		<?php echo $form->textArea($model,'REU_detalle',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REU_asistencia'); ?>
		<?php echo $form->textField($model,'REU_asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REU_fecha'); ?>
		<?php echo $form->textField($model,'REU_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->