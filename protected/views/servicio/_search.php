<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SER_correl'); ?>
		<?php echo $form->textField($model,'SER_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SER_COM_correl'); ?>
		<?php echo $form->textField($model,'SER_COM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SER_PRO_correl'); ?>
		<?php echo $form->textField($model,'SER_PRO_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SER_nombre'); ?>
		<?php echo $form->textField($model,'SER_nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SER_tipo'); ?>
		<?php echo $form->textField($model,'SER_tipo',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SER_monto'); ?>
		<?php echo $form->textField($model,'SER_monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SER_estado'); ?>
		<?php echo $form->textField($model,'SER_estado',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SER_fecha'); ?>
		<?php echo $form->textField($model,'SER_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->