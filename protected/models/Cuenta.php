<?php

/**
 * This is the model class for table "cuenta".
 *
 * The followings are the available columns in table 'cuenta':
 * @property string $CUE_correl
 * @property string $CUE_fecha
 * @property integer $CUE_estado
 * @property integer $CUE_saldo
 * @property string $CUE_HOG_correl
 *
 * The followings are the available model relations:
 * @property Hogar $cUEHOGCorrel
 * @property Gasto[] $gastos
 * @property Multa[] $multas
 */
class Cuenta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cuenta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CUE_fecha, CUE_estado, CUE_HOG_correl', 'required'),
			array('CUE_saldo', 'numerical', 'integerOnly'=>true),
			array('CUE_HOG_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CUE_correl, CUE_fecha, CUE_estado, CUE_saldo, CUE_HOG_correl', 'safe', 'on'=>'search'),
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
			'cUEHOGCorrel' => array(self::BELONGS_TO, 'Hogar', 'CUE_HOG_correl'),
			'gastos' => array(self::HAS_MANY, 'Gasto', 'GAS_CUE_correl'),
			'multas' => array(self::HAS_MANY, 'Multa', 'MUL_CUE_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CUE_correl' => 'Correl',
			'CUE_HOG_correl' => 'Hogar',
			'CUE_fecha' => 'Comienza',
			'CUE_fin'=>'Vence',
			'CUE_saldo' => 'Saldo',
			'CUE_estado' => 'Estado',
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

		$criteria->compare('CUE_correl',$this->CUE_correl,true);
		$criteria->compare('CUE_fecha',$this->CUE_fecha,true);
		$criteria->compare('CUE_estado',$this->CUE_estado);
		$criteria->compare('CUE_saldo',$this->CUE_saldo);
		$criteria->compare('CUE_HOG_correl',$this->CUE_HOG_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cuenta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
