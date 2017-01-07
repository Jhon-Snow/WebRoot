<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $USU_correl
 * @property string $USU_username
 * @property string $USU_password
 * @property string $USU_email
 * @property string $USU_fono
 * @property string $USU_nombre
 * @property string $USU_paterno
 * @property string $USU_materno
 * @property string $USU_rut
 * @property integer $USU_role
 * @property integer $USU_estado
 *
 * The followings are the available model relations:
 * @property Administra[] $administras
 * @property Horario[] $horarios
 * @property Reside[] $resides
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_username, USU_password, USU_email, USU_role, USU_estado', 'required'),
			// array('USU_role, USU_estado', 'numerical', 'integerOnly'=>true),
			array('USU_username, USU_email', 'length', 'max'=>100),
			array('USU_password', 'length', 'max'=>20),
			array('USU_fono, USU_nombre, USU_paterno, USU_materno', 'length', 'max'=>45),
			array('USU_rut', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_correl, USU_username, USU_password, USU_email, USU_fono, USU_nombre, USU_paterno, USU_materno, USU_rut, USU_role, USU_estado', 'safe', 'on'=>'search'),
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
			'administras' => array(self::HAS_MANY, 'Administra', 'ADM_USU_correl'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'HOR_USU_correl'),
			'resides' => array(self::HAS_MANY, 'Reside', 'RES_USU_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USU_correl' => 'Correl',
			'USU_username' => 'Username',
			'USU_password' => 'Password',
			'USU_email' => 'Email',
			'USU_fono' => 'Fono',
			'USU_nombre' => 'Nombre',
			'USU_paterno' => 'Paterno',
			'USU_materno' => 'Materno',
			'USU_rut' => 'Rut',
			'USU_role' => 'Role',
			'USU_estado' => 'Estado',
			'USU_rol'=>'Rol',
			'USU_state'=>'Estado',
			'USU_nombreCompleto'=>'Usuario'
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

		$criteria->compare('USU_correl',$this->USU_correl,true);
		$criteria->compare('USU_username',$this->USU_username,true);
		$criteria->compare('USU_password',$this->USU_password,true);
		$criteria->compare('USU_email',$this->USU_email,true);
		$criteria->compare('USU_fono',$this->USU_fono,true);
		$criteria->compare('USU_nombre',$this->USU_nombre,true);
		$criteria->compare('USU_paterno',$this->USU_paterno,true);
		$criteria->compare('USU_materno',$this->USU_materno,true);
		$criteria->compare('USU_rut',$this->USU_rut,true);
		$criteria->compare('USU_role',$this->USU_role);
		$criteria->compare('USU_estado',$this->USU_estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getNombreCompleto(){
		return $this->USU_nombre." ".$this->USU_paterno.' '.$this->USU_materno;
	}
}
