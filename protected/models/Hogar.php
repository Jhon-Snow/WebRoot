<?php

/**
 * This is the model class for table "hogar".
 *
 * The followings are the available columns in table 'hogar':
 * @property string $HOG_correl
 * @property string $HOG_numero
 * @property string $HOG_pasaje
 * @property integer $HOG_bagnos
 * @property integer $HOG_habitaciones
 * @property integer $HOG_metros
 * @property double $HOG_porcentaje
 * @property integer $HOG_estado
 * @property integer $HOG_habitado
 * @property string $HOG_COM_correl
 *
 * The followings are the available model relations:
 * @property Administra[] $administras
 * @property Cuenta[] $cuentas
 * @property Comunidad $hOGCOMCorrel
 * @property Horario[] $horarios
 * @property Reside[] $resides
 */
class Hogar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hogar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOG_estado, HOG_COM_correl', 'required','message'=>'Debe ingresar un estado'),
			array('HOG_bagnos, HOG_habitaciones, HOG_metros', 'numerical', 'integerOnly'=>true),
			array('HOG_porcentaje', 'numerical','max'=>100,'tooBig'=>'El valor de Porcentaje debe ser inferior a 100'),
			array('HOG_numero, HOG_pasaje', 'length', 'max'=>45),
			array('HOG_COM_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('HOG_correl, HOG_numero, HOG_pasaje, HOG_bagnos, HOG_habitaciones, HOG_metros, HOG_porcentaje, HOG_estado, HOG_habitado, HOG_COM_correl', 'safe', 'on'=>'search'),
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
			'administras' => array(self::HAS_MANY, 'Administra', 'ADM_HOG_correl'),
			'cuentas' => array(self::HAS_MANY, 'Cuenta', 'CUE_HOG_correl'),
			'hOGCOMCorrel' => array(self::BELONGS_TO, 'Comunidad', 'HOG_COM_correl'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'HOR_HOG_correl'),
			'resides' => array(self::HAS_MANY, 'Reside', 'RES_HOG_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'HOG_correl' => 'Correl',
			'HOG_numero' => 'Numero',
			'HOG_pasaje' => 'Pasaje',
			'HOG_bagnos' => 'Baños',
			'HOG_habitaciones' => 'Habitaciones',
			'HOG_metros' => 'Metros',
			'HOG_porcentaje' => 'Porcentaje',
			'HOG_estado' => 'Estado',
			'HOG_habitado' => 'Habitado',
			'HOG_COM_correl' => 'Comunidad',
			'HOG_direccion'=>'Hogar',
			'HOG_dueno'=>'Dueño',
			'HOG_arren'=>'Arrendatario',
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

		$criteria->compare('HOG_correl',$this->HOG_correl,true);
		$criteria->compare('HOG_numero',$this->HOG_numero,true);
		$criteria->compare('HOG_pasaje',$this->HOG_pasaje,true);
		$criteria->compare('HOG_bagnos',$this->HOG_bagnos);
		$criteria->compare('HOG_habitaciones',$this->HOG_habitaciones);
		$criteria->compare('HOG_metros',$this->HOG_metros);
		$criteria->compare('HOG_porcentaje',$this->HOG_porcentaje);
		$criteria->compare('HOG_estado',$this->HOG_estado);
		$criteria->compare('HOG_habitado',$this->HOG_habitado);
		$criteria->compare('HOG_COM_correl',$this->HOG_COM_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hogar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getdireccion(){
		return $this->HOG_numero." ".$this->HOG_pasaje;
	}

	public function gethog_dueno()
	{
		return ($model=Reside::model()->findByAttributes(array("RES_HOG_correl"=>$this->HOG_correl,"RES_fin"=>null,'RES_tipo'=>"Dueño")))
			?Usuario::model()->findByPk($model->RES_USU_correl)->USU_nombre." ".Usuario::model()->findByPk($model->RES_USU_correl)->USU_paterno
			:"Sin Asignar";
	}

	public function gethog_arren()
	{
		return ($model=Reside::model()->findByAttributes(array("RES_HOG_correl"=>$this->HOG_correl,"RES_fin"=>null,'RES_tipo'=>"Arrendatario")))
			?Usuario::model()->findByPk($model->RES_USU_correl)->USU_nombre." ".Usuario::model()->findByPk($model->RES_USU_correl)->USU_paterno
			:"Sin Asignar";
	}
}
