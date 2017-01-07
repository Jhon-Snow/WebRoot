<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'comunidad-form',	
	'type' => 'horizontal',
	'enableAjaxValidation'=>true,'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->textFieldGroup($model,'COM_nombre',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->numberFieldGroup($model,'COM_hogares',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->dropDownListGroup($model,'COM_estado',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Habilitado'=>'Habilitado','No Habilitado'=>'No Habilitado'),
				'htmlOptions' => array('empty'=>'Seleccione Estado'),)));  ?>
		<?php echo $form->datePickerGroup($model,'COM_fecha',array(
			'widgetOptions' => array(
				'options' => array(
					'language' => 'es',
					'format'=>'yyyy-mm-dd',
					'clearBtn'=>true,
					 'autoclose'=> true,)
				,),
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-5',
			),
			'hint' => 'Si no ingresa fecha se tomara la fecha de hoy',
			'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>
		<?php echo $form->fileFieldGroup($model, 'COM_portada',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
			)
		); ?>


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