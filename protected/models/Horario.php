<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property string $HOR_correl
 * @property string $HOR_fecha
 * @property string $HOR_entrada
 * @property string $HOR_salida
 * @property string $HOR_USU_correl
 * @property string $HOR_COM_correl
 *
 * The followings are the available model relations:
 * @property Comunidad $hORCOMCorrel
 * @property Usuario $hORUSUCorrel
 */
class Horario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOR_fecha, HOR_entrada, HOR_salida, HOR_USU_correl, HOR_COM_correl', 'required'),
			array('HOR_USU_correl, HOR_COM_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('HOR_correl, HOR_fecha, HOR_entrada, HOR_salida, HOR_USU_correl, HOR_COM_correl', 'safe', 'on'=>'search'),
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
			'hORCOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'HOR_COM_correl'),
			'hORUSUCorrel' => array(self::BELONGS_TO, 'Usuario', 'HOR_USU_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'HOR_correl' => 'Hor Correl',
			'HOR_fecha' => 'Hor Fecha',
			'HOR_entrada' => 'Hor Entrada',
			'HOR_salida' => 'Hor Salida',
			'HOR_USU_correl' => 'Hor Usu Correl',
			'HOR_COM_correl' => 'Hor Com Correl',
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

		$criteria->compare('HOR_correl',$this->HOR_correl,true);
		$criteria->compare('HOR_fecha',$this->HOR_fecha,true);
		$criteria->compare('HOR_entrada',$this->HOR_entrada,true);
		$criteria->compare('HOR_salida',$this->HOR_salida,true);
		$criteria->compare('HOR_USU_correl',$this->HOR_USU_correl,true);
		$criteria->compare('HOR_COM_correl',$this->HOR_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
