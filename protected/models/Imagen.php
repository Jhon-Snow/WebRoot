<?php

/**
 * This is the model class for table "imagen".
 *
 * The followings are the available columns in table 'imagen':
 * @property string $IMA_correl
 * @property string $IMA_nombre
 * @property string $IMA_url
 * @property string $IMA_COM_correl
 *
 * The followings are the available model relations:
 * @property Comunidad $iMACOMCorrel
 */
class Imagen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IMA_url, IMA_COM_correl', 'required'),
			array('IMA_nombre, IMA_url', 'length', 'max'=>100),
			array('IMA_COM_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IMA_correl, IMA_nombre, IMA_url, IMA_COM_correl', 'safe', 'on'=>'search'),
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
			'iMACOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'IMA_COM_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IMA_correl' => 'Ima Correl',
			'IMA_nombre' => 'Ima Nombre',
			'IMA_url' => 'Ima Url',
			'IMA_COM_correl' => 'Ima Com Correl',
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

		$criteria->compare('IMA_correl',$this->IMA_correl,true);
		$criteria->compare('IMA_nombre',$this->IMA_nombre,true);
		$criteria->compare('IMA_url',$this->IMA_url,true);
		$criteria->compare('IMA_COM_correl',$this->IMA_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
