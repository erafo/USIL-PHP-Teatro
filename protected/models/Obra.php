<?php

/**
 * This is the model class for table "tbl_obra".
 *
 * The followings are the available columns in table 'tbl_obra':
 * @property integer $obraId
 * @property string $nombre
 * @property string $autor
 * @property string $director
 * @property string $actores
 * @property string $salas
 * @property string $horarios
 * @property string $precios
 * @property string $temporada
 * @property string $afiche
 * @property string $resena
 * @property integer $generoId
 *
 * The followings are the available model relations:
 * @property Genero $genero
 * @property User[] $tblUsers
 */
class Obra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Obra the static model class
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
		return 'tbl_obra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, autor, director, actores, salas, horarios, precios, temporada, afiche, resena, generoId', 'required'),
			array('generoId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('obraId, nombre, autor, director, actores, salas, horarios, precios, temporada, afiche, resena, generoId', 'safe', 'on'=>'search'),
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
			'genero' => array(self::BELONGS_TO, 'Genero', 'generoId'),
			'tblUsers' => array(self::MANY_MANY, 'User', 'tbl_voto(obraId, userId)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'obraId' => 'Obra',
			'nombre' => 'Nombre',
			'autor' => 'Autor',
			'director' => 'Director',
			'actores' => 'Actores',
			'salas' => 'Salas',
			'horarios' => 'Horarios',
			'precios' => 'Precios',
			'temporada' => 'Temporada',
			'afiche' => 'Afiche',
			'resena' => 'Resena',
			'generoId' => 'Genero',
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

		$criteria->compare('obraId',$this->obraId);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('director',$this->director,true);
		$criteria->compare('actores',$this->actores,true);
		$criteria->compare('salas',$this->salas,true);
		$criteria->compare('horarios',$this->horarios,true);
		$criteria->compare('precios',$this->precios,true);
		$criteria->compare('temporada',$this->temporada,true);
		$criteria->compare('afiche',$this->afiche,true);
		$criteria->compare('resena',$this->resena,true);
		$criteria->compare('generoId',$this->generoId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}