<?php

/**
 * This is the model class for table "reside".
 *
 * The followings are the available columns in table 'reside':
 * @property string $RES_correl
 * @property string $RES_inicio
 * @property string $RES_fin
 * @property integer $RES_tipo
 * @property string $RES_HOG_correl
 * @property string $RES_USU_correl
 *
 * The followings are the available model relations:
 * @property Hogar $rESHOGCorrel
 * @property Usuario $rESUSUCorrel
 */
class Reside extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reside';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RES_inicio, RES_HOG_correl, RES_USU_correl', 'required'),
			array('RES_tipo', 'numerical', 'integerOnly'=>true),
			array('RES_HOG_correl, RES_USU_correl', 'length', 'max'=>10),
			array('RES_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RES_correl, RES_inicio, RES_fin, RES_tipo, RES_HOG_correl, RES_USU_correl', 'safe', 'on'=>'search'),
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
			'rESHOGCorrel' => array(self::BELONGS_TO, 'Hogar', 'RES_HOG_correl'),
			'rESUSUCorrel' => array(self::BELONGS_TO, 'Usuario', 'RES_USU_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RES_correl' => 'Res Correl',
			'RES_inicio' => 'Res Inicio',
			'RES_fin' => 'Res Fin',
			'RES_tipo' => 'Res Tipo',
			'RES_HOG_correl' => 'Res Hog Correl',
			'RES_USU_correl' => 'Res Usu Correl',
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

		$criteria->compare('RES_correl',$this->RES_correl,true);
		$criteria->compare('RES_inicio',$this->RES_inicio,true);
		$criteria->compare('RES_fin',$this->RES_fin,true);
		$criteria->compare('RES_tipo',$this->RES_tipo);
		$criteria->compare('RES_HOG_correl',$this->RES_HOG_correl,true);
		$criteria->compare('RES_USU_correl',$this->RES_USU_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reside the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
