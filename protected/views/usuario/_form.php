<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'usuario-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
));
?>


	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>


		<?php echo $form->textFieldGroup($model,'USU_username',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->passwordFieldGroup($model,'USU_password',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'USU_nombre',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'USU_paterno',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'USU_materno',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'USU_rut',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textFieldGroup($model,'USU_fono',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->emailFieldGroup($model,'USU_email',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->dropDownListGroup($model,'USU_role',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Super Usuario'=>'Super Usuario','Administrador'=>'Administrador','Residente'=>'Residente','Conserje'=>'Conserje'),
				'htmlOptions' => array('empty' => 'Seleccione Role','disabled'=>Yii::app()->user->isGuest),
				)
			));  ?>
		<?php   ?>
		<?php echo $form->dropDownListGroup($model,'USU_estado',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Habilitado'=>'Habilitado','No Habilitado'=>'No Habilitado'),
				'htmlOptions' => array('empty'=>'Seleccione Estado'),
			)
		));  ?>

	<div class="row buttons">
		<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'primary',
				'label' => 'Aceptar',
				'htmlOptions'=>array(
					'style' => 'margin-left: 26%;',
					)
			)
		); ?>
		<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'reset', 
				'label' => 'Borrar',
				'htmlOptions'=>array(
					'style' => 'margin-left: 2%;',
					)
				)
		); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->