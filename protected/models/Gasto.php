<?php

/**
 * This is the model class for table "gasto".
 *
 * The followings are the available columns in table 'gasto':
 * @property string $GAS_correl
 * @property string $GAS_nombre
 * @property integer $GAS_monto
 * @property integer $GAS_tipo
 * @property string $GAS_CUE_correl
 *
 * The followings are the available model relations:
 * @property Cuenta $gASCUECorrel
 */
class Gasto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gasto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GAS_tipo, GAS_CUE_correl', 'required'),
			array('GAS_monto, GAS_tipo', 'numerical', 'integerOnly'=>true),
			array('GAS_nombre', 'length', 'max'=>45),
			array('GAS_CUE_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('GAS_correl, GAS_nombre, GAS_monto, GAS_tipo, GAS_CUE_correl', 'safe', 'on'=>'search'),
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
			'gASCUECorrel' => array(self::BELONGS_TO, 'Cuenta', 'GAS_CUE_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GAS_correl' => 'Gas Correl',
			'GAS_nombre' => 'Gas Nombre',
			'GAS_monto' => 'Gas Monto',
			'GAS_tipo' => 'Gas Tipo',
			'GAS_CUE_correl' => 'Gas Cue Correl',
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

		$criteria->compare('GAS_correl',$this->GAS_correl,true);
		$criteria->compare('GAS_nombre',$this->GAS_nombre,true);
		$criteria->compare('GAS_monto',$this->GAS_monto);
		$criteria->compare('GAS_tipo',$this->GAS_tipo);
		$criteria->compare('GAS_CUE_correl',$this->GAS_CUE_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gasto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
