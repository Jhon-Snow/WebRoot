<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property string $PRO_correl
 * @property string $PRO_nombre
 * @property string $PRO_logo
 * @property string $PRO_fono
 * @property string $PRO_email
 * @property integer $PRO_estado
 *
 * The followings are the available model relations:
 * @property Servicio[] $servicios
 */
class Proveedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRO_estado', 'required'),
			array('PRO_nombre, PRO_email', 'length', 'max'=>100),
			array('PRO_logo', 'length', 'max'=>200),
			array('PRO_fono', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRO_correl, PRO_nombre, PRO_logo, PRO_fono, PRO_email, PRO_estado', 'safe', 'on'=>'search'),
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
			'servicios' => array(self::HAS_MANY, 'Servicio', 'SER_PRO_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRO_correl' => 'Correl',
			'PRO_nombre' => 'Nombre',
			'PRO_logo' => 'Logo',
			'PRO_fono' => 'Fono',
			'PRO_email' => 'Email',
			'PRO_estado' => 'Estado',
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

		$criteria->compare('PRO_correl',$this->PRO_correl,true);
		$criteria->compare('PRO_nombre',$this->PRO_nombre,true);
		$criteria->compare('PRO_logo',$this->PRO_logo,true);
		$criteria->compare('PRO_fono',$this->PRO_fono,true);
		$criteria->compare('PRO_email',$this->PRO_email,true);
		$criteria->compare('PRO_estado',$this->PRO_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
