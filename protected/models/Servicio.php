<?php

/**
 * This is the model class for table "servicio".
 *
 * The followings are the available columns in table 'servicio':
 * @property string $SER_correl
 * @property integer $SER_tipo
 * @property integer $SER_monto
 * @property string $SER_nombre
 * @property string $SER_fecha
 * @property string $SER_PRO_correl
 * @property string $SER_COM_correl
 *
 * The followings are the available model relations:
 * @property Comunidad $sERCOMCorrel
 * @property Proveedor $sERPROCorrel
 */
class Servicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SER_PRO_correl, SER_COM_correl,SER_estado,SER_tipo', 'required','message'=>'El campo no puede quedar vacio'),
			array('SER_monto', 'numerical', 'integerOnly'=>true),
			array('SER_nombre', 'length', 'max'=>100),
			array('SER_PRO_correl, SER_COM_correl', 'length', 'max'=>10),
			array('SER_fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SER_correl, SER_tipo, SER_monto, SER_nombre, SER_fecha, SER_PRO_correl, SER_COM_correl,SER_estado', 'safe', 'on'=>'search'),
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
			'sERCOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'SER_COM_correl'),
			'sERPROCorrel' => array(self::BELONGS_TO, 'Proveedor', 'SER_PRO_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SER_correl' => 'Correl',
			'SER_tipo' => 'Tipo',
			'SER_monto' => 'Monto',
			'SER_nombre' => 'Nombre',
			'SER_fecha' => 'Fecha',
			'SER_PRO_correl' => 'Proveedor',
			'SER_COM_correl' => 'Comuna',
			'SER_estado'=>'Estado'
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

		$criteria->compare('SER_correl',$this->SER_correl,true);
		$criteria->compare('SER_tipo',$this->SER_tipo);
		$criteria->compare('SER_monto',$this->SER_monto);
		$criteria->compare('SER_nombre',$this->SER_nombre,true);
		$criteria->compare('SER_fecha',$this->SER_fecha,true);
		$criteria->compare('SER_PRO_correl',$this->SER_PRO_correl,true);
		$criteria->compare('SER_COM_correl',$this->SER_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Servicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
