<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

$this->breadcrumbs=array(
	'Comunidades'=>array('admin'),
	$model->COM_nombre,
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<center>
<?php echo TbHtml::pageheader($model->COM_nombre,'',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php
	$noticias= Noticia::model()->findAllByAttributes(array('NOT_COM_correl'=>$model->COM_correl,'NOT_estado'=>1));
	$items=null;
	foreach ($noticias as $key => $value) {
		// $imagen
		$items[$key]=array(
		                'image' => Yii::app()->request->baseUrl.'/images/noticia/'.$value->NOT_correl.'.jpg',
		                'label' => $value->NOT_asunto,
		                'caption' => $value->NOT_detalle,
		                'src' => 'http://www.fortishealthcare.com',            
				        'title' => 'Yii Booster',
				        'imageOptions' => array('style'=>'border-radius:20px;opacity:0.6'),
		            );
	}
	if ($items!=null) {
		echo "<center>";
		$this->widget(
		    'booster.widgets.TbCarousel',
		    array(
		    	'htmlOptions'=>array('style'=>'width:70%;border-radius:50px;padding:-2.5%'),
		        'items' => $items,
		        // 'prevLabel'=>"Antes",

		    )
		);
		echo "</center>";
	}
?>
