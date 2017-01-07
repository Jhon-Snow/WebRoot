<?php
/* @var $this AdministraController */
/* @var $model Administra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ADM_correl'); ?>
		<?php echo $form->textField($model,'ADM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_inicio'); ?>
		<?php echo $form->textField($model,'ADM_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_fin'); ?>
		<?php echo $form->textField($model,'ADM_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_USU_correl'); ?>
		<?php echo $form->textField($model,'ADM_USU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_COM_correl'); ?>
		<?php echo $form->textField($model,'ADM_COM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->