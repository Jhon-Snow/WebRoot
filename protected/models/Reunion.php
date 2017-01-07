<?php

/**
 * This is the model class for table "reunion".
 *
 * The followings are the available columns in table 'reunion':
 * @property string $REU_correl
 * @property integer $REU_tipo
 * @property string $REU_asunto
 * @property string $REU_detalle
 * @property integer $REU_asistencia
 * @property string $REU_COM_correl
 *
 * The followings are the available model relations:
 * @property Documento[] $documentos
 * @property Comunidad $rEUCOMCorrel
 */
class Reunion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reunion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REU_COM_correl', 'required'),
			array('REU_asistencia', 'numerical', 'integerOnly'=>true),
			array('REU_asunto', 'length', 'max'=>100),
			array('REU_COM_correl', 'length', 'max'=>10),
			array('REU_detalle,REU_tipo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('REU_correl, REU_tipo, REU_asunto, REU_detalle, REU_asistencia, REU_COM_correl', 'safe', 'on'=>'search'),
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
			'documentos' => array(self::HAS_MANY, 'Documento', 'DOC_REU_correl'),
			'rEUCOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'REU_COM_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'REU_correl' => 'Correl',
			'REU_tipo' => 'Tipo',
			'REU_asunto' => 'Asunto',
			'REU_detalle' => 'Detalle',
			'REU_asistencia' => 'Asistencia',
			'REU_fecha'=>'Fecha',
			'REU_COM_correl' => 'Comunidad',
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

		$criteria->compare('REU_correl',$this->REU_correl,true);
		$criteria->compare('REU_tipo',$this->REU_tipo);
		$criteria->compare('REU_asunto',$this->REU_asunto,true);
		$criteria->compare('REU_detalle',$this->REU_detalle,true);
		$criteria->compare('REU_asistencia',$this->REU_asistencia);
		$criteria->compare('REU_COM_correl',$this->REU_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reunion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
