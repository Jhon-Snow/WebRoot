<?php

/**
 * This is the model class for table "noticia".
 *
 * The followings are the available columns in table 'noticia':
 * @property string $NOT_correl
 * @property integer $NOT_tipo
 * @property string $NOT_asunto
 * @property string $NOT_detalle
 * @property string $NOT_fecha
 * @property integer $NOT_estado
 * @property string $NOT_imagen
 * @property string $NOT_COM_correl
 *
 * The followings are the available model relations:
 * @property Comunidad $nOTCOMCorrel
 */
class Noticia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOT_fecha, NOT_estado, NOT_COM_correl', 'required'),
			array('NOT_asunto, NOT_imagen', 'length', 'max'=>100),
			array('NOT_COM_correl', 'length', 'max'=>10),
			array('NOT_detalle, NOT_tipo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NOT_correl, NOT_tipo, NOT_asunto, NOT_detalle, NOT_fecha, NOT_estado, NOT_imagen, NOT_COM_correl', 'safe', 'on'=>'search'),
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
			'nOTCOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'NOT_COM_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NOT_correl' => 'Correl',
			'NOT_tipo' => 'Tipo',
			'NOT_asunto' => 'Asunto',
			'NOT_detalle' => 'Detalle',
			'NOT_fecha' => 'Fecha',
			'NOT_estado' => 'Estado',
			'NOT_imagen' => 'Imagen',
			'NOT_COM_correl' => 'Comunidad',
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

		$criteria->compare('NOT_correl',$this->NOT_correl,true);
		$criteria->compare('NOT_tipo',$this->NOT_tipo);
		$criteria->compare('NOT_asunto',$this->NOT_asunto,true);
		$criteria->compare('NOT_detalle',$this->NOT_detalle,true);
		$criteria->compare('NOT_fecha',$this->NOT_fecha,true);
		$criteria->compare('NOT_estado',$this->NOT_estado);
		$criteria->compare('NOT_imagen',$this->NOT_imagen,true);
		$criteria->compare('NOT_COM_correl',$this->NOT_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
