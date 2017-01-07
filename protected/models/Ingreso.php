<?php

/**
 * This is the model class for table "ingreso".
 *
 * The followings are the available columns in table 'ingreso':
 * @property string $ING_correl
 * @property string $ING_fecha
 * @property integer $ING_multas
 * @property integer $ING_otros
 * @property string $ING_COM_correl
 *
 * The followings are the available model relations:
 * @property Comunidad $iNGCOMCorrel
 */
class Ingreso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ingreso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ING_fecha, ING_COM_correl', 'required'),
			array('ING_multas, ING_otros', 'numerical', 'integerOnly'=>true),
			array('ING_COM_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ING_correl, ING_fecha, ING_multas, ING_otros, ING_COM_correl', 'safe', 'on'=>'search'),
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
			'iNGCOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'ING_COM_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ING_correl' => 'Correl',
			'ING_fecha' => 'Fecha',
			'ING_multas' => 'Multas',
			'ING_otros' => 'Otros',
			'ING_COM_correl' => 'Comunidad',
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

		$criteria->compare('ING_correl',$this->ING_correl,true);
		$criteria->compare('ING_fecha',$this->ING_fecha,true);
		$criteria->compare('ING_multas',$this->ING_multas);
		$criteria->compare('ING_otros',$this->ING_otros);
		$criteria->compare('ING_COM_correl',$this->ING_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ingreso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
