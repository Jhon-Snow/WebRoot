<?php

/**
 * This is the model class for table "administra".
 *
 * The followings are the available columns in table 'administra':
 * @property string $ADM_correl
 * @property string $ADM_inicio
 * @property string $ADM_fin
 * @property string $ADM_USU_correl
 * @property string $ADM_COM_correl
 *
 * The followings are the available model relations:
 * @property Comunidad $aDMCOMCorrel
 * @property Usuario $aDMUSUCorrel
 */
class Administra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'administra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ADM_inicio, ADM_USU_correl, ADM_COM_correl', 'required'),
			array('ADM_USU_correl, ADM_COM_correl', 'length', 'max'=>10),
			array('ADM_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ADM_correl, ADM_inicio, ADM_fin, ADM_USU_correl, ADM_COM_correl', 'safe', 'on'=>'search'),
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
			'aDMCOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'ADM_COM_correl'),
			'aDMUSUCorrel' => array(self::BELONGS_TO, 'Usuario', 'ADM_USU_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ADM_correl' => 'Correl',
			'ADM_inicio' => 'Inicio',
			'ADM_fin' => 'Fin',
			'ADM_USU_correl' => 'Usuario',
			'ADM_COM_correl' => 'Comunidad',
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

		$criteria->compare('ADM_correl',$this->ADM_correl,true);
		$criteria->compare('ADM_inicio',$this->ADM_inicio,true);
		$criteria->compare('ADM_fin',$this->ADM_fin,true);
		$criteria->compare('ADM_USU_correl',$this->ADM_USU_correl,true);
		$criteria->compare('ADM_COM_correl',$this->ADM_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Administra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
