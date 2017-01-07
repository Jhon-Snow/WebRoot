<?php

/**
 * This is the model class for table "multa".
 *
 * The followings are the available columns in table 'multa':
 * @property string $MUL_correl
 * @property string $MUL_cargo
 * @property string $MUL_detalle
 * @property integer $MUL_monto
 * @property integer $MUL_estado
 * @property string $MUL_CUE_correl
 *
 * The followings are the available model relations:
 * @property Cuenta $mULCUECorrel
 */
class Multa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'multa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MUL_estado, MUL_CUE_correl', 'required'),
			array('MUL_monto, MUL_estado', 'numerical', 'integerOnly'=>true),
			array('MUL_cargo', 'length', 'max'=>100),
			array('MUL_CUE_correl', 'length', 'max'=>10),
			array('MUL_detalle', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MUL_correl, MUL_cargo, MUL_detalle, MUL_monto, MUL_estado, MUL_CUE_correl', 'safe', 'on'=>'search'),
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
			'mULCUECorrel' => array(self::BELONGS_TO, 'Cuenta', 'MUL_CUE_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MUL_correl' => 'Mul Correl',
			'MUL_cargo' => 'Mul Cargo',
			'MUL_detalle' => 'Mul Detalle',
			'MUL_monto' => 'Mul Monto',
			'MUL_estado' => 'Mul Estado',
			'MUL_CUE_correl' => 'Mul Cue Correl',
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

		$criteria->compare('MUL_correl',$this->MUL_correl,true);
		$criteria->compare('MUL_cargo',$this->MUL_cargo,true);
		$criteria->compare('MUL_detalle',$this->MUL_detalle,true);
		$criteria->compare('MUL_monto',$this->MUL_monto);
		$criteria->compare('MUL_estado',$this->MUL_estado);
		$criteria->compare('MUL_CUE_correl',$this->MUL_CUE_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Multa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
