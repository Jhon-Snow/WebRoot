<?php
/* @var $this ResideController */
/* @var $model Reside */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RES_correl'); ?>
		<?php echo $form->textField($model,'RES_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RES_USU_correl'); ?>
		<?php echo $form->textField($model,'RES_USU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RES_HOG_correl'); ?>
		<?php echo $form->textField($model,'RES_HOG_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RES_inicio'); ?>
		<?php echo $form->textField($model,'RES_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RES_fin'); ?>
		<?php echo $form->textField($model,'RES_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RES_tipo'); ?>
		<?php echo $form->textField($model,'RES_tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->