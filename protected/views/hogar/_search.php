<?php
/* @var $this HogarController */
/* @var $model Hogar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'HOG_correl'); ?>
		<?php echo $form->textField($model,'HOG_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_COM_correl'); ?>
		<?php echo $form->textField($model,'HOG_COM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_pasaje'); ?>
		<?php echo $form->textField($model,'HOG_pasaje',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_numero'); ?>
		<?php echo $form->textField($model,'HOG_numero',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_metros'); ?>
		<?php echo $form->textField($model,'HOG_metros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_habitaciones'); ?>
		<?php echo $form->textField($model,'HOG_habitaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_bagnos'); ?>
		<?php echo $form->textField($model,'HOG_bagnos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->