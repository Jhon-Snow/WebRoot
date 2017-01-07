<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'servicios-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->dropDownListGroup($model,'SER_PRO_correl',array(
			'wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions'=>array('data'=>CHtml::listData(Proveedor::model()->findAll(),'PRO_correl', 'PRO_nombre'),
				'htmlOptions' => array('empty'=>'Seleccione Proveedor')),
			));?>
		<?php echo $form->textFieldGroup($model,'SER_nombre',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>

		<?php echo $form->dropDownListGroup($model,'SER_tipo',array(
			'wrapperHtmlOptions' => array('class' => 'col-sm-5'),
			'widgetOptions' => array('data' => array('Calculo por m2'=>'Calculo por m2','Cargo fijo'=>'Cargo fijo','Compartido'=>'Compartido'),
			'htmlOptions' => array('prompt'=>'Seleccione Tipo'),
				
			array('options'=>array('2'=>array('selected'=>true))))));  ?>

		<?php echo $form->numberFieldGroup($model,'SER_monto',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>

		<?php echo $form->dropDownListGroup($model,'SER_estado',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array('data' => array('Habilitado'=>'Habilitado','No Habilitado'=>'No Habilitado'),
			'htmlOptions' => array('prompt'=>'Seleccione Tipo'),)));  ?>

		<?php echo $form->datePickerGroup($model,'SER_fecha',array(
			'widgetOptions' => array(
				'options' => array(
					'language' => 'es',
					'format'=>'yyyy-mm-dd',
					 'autoclose'=> true,)
				,),
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-5',
			),
			'hint' => 'Si no ingresa fecha se tomara la fecha de hoy',
			'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
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