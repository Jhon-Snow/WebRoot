<?php

/**
 * This is the model class for table "documento".
 *
 * The followings are the available columns in table 'documento':
 * @property string $DOC_correl
 * @property string $DOC_nombre
 * @property string $DOC_url
 * @property string $DOC_REU_correl
 *
 * The followings are the available model relations:
 * @property Reunion $dOCREUCorrel
 */
class Documento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DOC_url, DOC_REU_correl', 'required'),
			array('DOC_nombre, DOC_url', 'length', 'max'=>100),
			array('DOC_REU_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DOC_correl, DOC_nombre, DOC_url, DOC_REU_correl', 'safe', 'on'=>'search'),
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
			'dOCREUCorrel' => array(self::BELONGS_TO, 'Reunion', 'DOC_REU_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DOC_correl' => 'Doc Correl',
			'DOC_nombre' => 'Doc Nombre',
			'DOC_url' => 'Doc Url',
			'DOC_REU_correl' => 'Doc Reu Correl',
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

		$criteria->compare('DOC_correl',$this->DOC_correl,true);
		$criteria->compare('DOC_nombre',$this->DOC_nombre,true);
		$criteria->compare('DOC_url',$this->DOC_url,true);
		$criteria->compare('DOC_REU_correl',$this->DOC_REU_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Documento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
