<?php
/* @var $this ComunidadController */
/* @var $data Comunidad */
?>
<style>
div.vista
{
	padding: 10px;
	margin: 10px 0;
	border: 3px solid #bdd8b9;
	width: 90%;
	float: left;
	position: static;
	border-radius: 15px

}
div.titulo{
	clear:both;
	margin:auto;
	width: 30%;
	/*background:#000FFF;*/
}
div.datos
{
	padding: 0px;
	margin: 10% 5px;
	position: relative;
	/*vertical-align: middle;*/
	/*border: 2px solid red;*/
	width: 60%;
	float: left;
	text-align: center;
	
}
div.imagen
{
	padding: 10px;
	margin: auto;
	position: relative;
	/*border: 2px solid black;*/
	float: left;
	width: 35%;
	
}

div.marco{
   border: 2px solid red;
}
</style>
<!-- <div class="view"> -->
<div class=" vista">
	<?php //var_dump(is_file('images/comunidad/5.jpg')); ?>
	<div class="titulo">
		<?php echo TbHtml::Lead($data->COM_nombre,$htmlOptions=array(
		'style'=> 'color:#00b0f0;')); ?>
	</div>
	<div class="imagen">
					<?php  
					echo TbHtml::image(Yii::app()->request->baseUrl.'/images/comunidad/5.jpg','',$htmlOptions=array(
								'style'=>'width:100%;padding: 5px;margin:3px;border-radius: 15px;background-color:#DDDDDD;'
								));
					?>
	</div>
	<div class="datos">
		<?php $this->widget(
    'booster.widgets.TbButtonGroup',
    array(
    	'size'=>'large',
    	// 'htmlOptions'=>array('style'=>'background-color:#000'),
        'buttons' => array(
            array(
            	// 'label' => '.',
            	'icon'=>'glyphicon glyphicon-home',
            	'url' => '#',
            	'htmlOptions'=>array('style'=>'background-color:#DDD;width:80px;height:80px;'),
            	),
        ),
    )
);$this->widget(
    'booster.widgets.TbButtonGroup',
    array(
    	// 'htmlOptions'=>array('style'=>'background-color:#000;'),
    	'size'=>'large',
        'buttons' => array(
            array(
            	'label' => '',
            	'url' => '#',
            	'icon'=>'glyphicon glyphicon-usd',
            	'htmlOptions'=>array('style'=>'background-color:#DDD;width:80px;height:80px;'),
            	),
        ),
    )
);$this->widget(
    'booster.widgets.TbButtonGroup',
    array(
    	// 'htmlOptions'=>array('style'=>'background-color:#000'),
    	'size'=>'large',
        'buttons' => array(
            array('label' => '8', 'url' => '#','htmlOptions'=>array('style'=>'background-color:#DDD;width:80px;height:80px;'),),
        ),
    )
);$this->widget(
    'booster.widgets.TbButtonGroup',
    array(
    	// 'htmlOptions'=>array('style'=>'background-color:#000'),
    	'size'=>'large',
        'buttons' => array(
            array('label' => '8', 'url' => '#','htmlOptions'=>array('style'=>'background-color:#DDD;width:80px;height:80px;'),),
        ),
    )
);$this->widget(
    'booster.widgets.TbButtonGroup',
    array(
    	// 'htmlOptions'=>array('style'=>'background-color:#000'),
    	'size'=>'large',
        'buttons' => array(
            array('label' => '8', 'url' => '#','htmlOptions'=>array('style'=>'background-color:#DDD;width:80px;height:80px;'),),
        ),
    )
); ?>

	</div>


</div>

</div>