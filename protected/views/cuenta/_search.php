<?php
/* @var $this CuentaController */
/* @var $model Cuenta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CUE_correl'); ?>
		<?php echo $form->textField($model,'CUE_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CUE_fecha'); ?>
		<?php echo $form->textField($model,'CUE_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CUE_estado'); ?>
		<?php echo $form->textField($model,'CUE_estado',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CUE_saldo'); ?>
		<?php echo $form->textField($model,'CUE_saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CUE_HOG_correl'); ?>
		<?php echo $form->textField($model,'CUE_HOG_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CUE_fin'); ?>
		<?php echo $form->textField($model,'CUE_fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->