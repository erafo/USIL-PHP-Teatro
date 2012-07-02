<?php

/**
 * This is the model class for table "tbl_voto".
 *
 * The followings are the available columns in table 'tbl_voto':
 * @property integer $votoId
 * @property integer $puntuacion
 * @property integer $userId
 * @property integer $obraId
 *
 * The followings are the available model relations:
 * @property Obra $obra
 * @property User $user
 */
class Voto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Voto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_voto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('puntuacion, userId, obraId', 'required'),
			array('puntuacion, userId, obraId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('votoId, puntuacion, userId, obraId', 'safe', 'on'=>'search'),
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
			'obra' => array(self::BELONGS_TO, 'Obra', 'obraId'),
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'votoId' => 'Voto',
			'puntuacion' => 'Puntuacion',
			'userId' => 'User',
			'obraId' => 'Obra',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('votoId',$this->votoId);
		$criteria->compare('puntuacion',$this->puntuacion);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('obraId',$this->obraId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}