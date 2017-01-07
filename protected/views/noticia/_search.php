<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NOT_correl'); ?>
		<?php echo $form->textField($model,'NOT_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOT_COM_correl'); ?>
		<?php echo $form->textField($model,'NOT_COM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOT_tipo'); ?>
		<?php echo $form->textField($model,'NOT_tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOT_asunto'); ?>
		<?php echo $form->textField($model,'NOT_asunto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOT_detalle'); ?>
		<?php echo $form->textArea($model,'NOT_detalle',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOT_fecha'); ?>
		<?php echo $form->textField($model,'NOT_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOT_estado'); ?>
		<?php echo $form->textField($model,'NOT_estado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->