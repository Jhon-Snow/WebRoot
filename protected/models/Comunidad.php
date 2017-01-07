<?php

/**
 * This is the model class for table "comunidad".
 *
 * The followings are the available columns in table 'comunidad':
 * @property string $COM_correl
 * @property string $COM_nombre
 * @property string $COM_fecha
 * @property integer $COM_hogares
 * @property string $COM_portada
 * @property integer $COM_estado
 *
 * The followings are the available model relations:
 * @property Hogar[] $hogars
 * @property Imagen[] $imagens
 * @property Ingreso[] $ingresos
 * @property Noticia[] $noticias
 * @property Reunion[] $reunions
 * @property Servicio[] $servicios
 */
class Comunidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comunidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_estado', 'required'),
			array('COM_hogares', 'numerical', 'integerOnly'=>true),
			array('COM_nombre, COM_portada', 'length', 'max'=>200),
			array('COM_fecha', 'safe'),
			array('COM_portada','file','types'=>'jpg,jpeg,png,gif','allowEmpty'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COM_correl, COM_nombre, COM_fecha, COM_hogares, COM_portada, COM_estado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'hogars' => array(self::HAS_MANY, 'Hogar', 'HOG_COM_correl'),
			'imagens' => array(self::HAS_MANY, 'Imagen', 'IMA_COM_correl'),
			'ingresos' => array(self::HAS_MANY, 'Ingreso', 'ING_COM_correl'),
			'noticias' => array(self::HAS_MANY, 'Noticia', 'NOT_COM_correl'),
			'reunions' => array(self::HAS_MANY, 'Reunion', 'REU_COM_correl'),
			'servicios' => array(self::HAS_MANY, 'Servicio', 'SER_COM_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COM_correl' => 'Correl',
			'COM_nombre' => 'Nombre',
			'COM_fecha' => 'Fecha',
			'COM_hogares' => 'Hogares',
			'COM_portada' => 'Portada',
			'COM_estado' => 'Estado',
			'COM_admin'=> 'Administrador'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('COM_correl',$this->COM_correl,true);
		$criteria->compare('COM_nombre',$this->COM_nombre,true);
		$criteria->compare('COM_fecha',$this->COM_fecha,true);
		$criteria->compare('COM_hogares',$this->COM_hogares);
		$criteria->compare('COM_portada',$this->COM_portada,true);
		$criteria->compare('COM_estado',$this->COM_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comunidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getcom_admin()
	{
		return ($model=Administra::model()->findByAttributes(array("ADM_COM_correl"=>$this->COM_correl,"ADM_fin"=>null)))
			?Usuario::model()->findByPk($model->ADM_USU_correl)->USU_nombre." ".Usuario::model()->findByPk($model->ADM_USU_correl)->USU_paterno
			:"Sin Asignar";
	}
}
