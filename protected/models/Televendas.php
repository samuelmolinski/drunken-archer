<?php

/**
 * This is the model class for table "televendas".
 *
 * The followings are the available columns in table 'televendas':
 * @property integer $id
 * @property string $razaoSocial
 * @property string $cnpj
 * @property integer $ddd
 * @property integer $telefone
 * @property string $cidade
 * @property string $estado
 * @property string $email
 * @property string $orcamentoDesejado
 */
class Televendas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Televendas the static model class
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
		return 'televendas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('razaoSocial, cnpj, ddd, telefone, cidade, estado, email, orcamentoDesejado', 'required'),
			array('estado, cidade, ddd, telefone', 'numerical', 'integerOnly'=>true),
			array('razaoSocial', 'length', 'max'=>100),
			array('cnpj', 'length', 'max'=>20),
			array('email, orcamentoDesejado', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, razaoSocial, cnpj, ddd, telefone, cidade, estado, email, orcamentoDesejado, time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'razaoSocial' => 'Razão Social',
			'cnpj' => 'CNPJ',
			'ddd' => 'DDD',
			'telefone' => 'Telefone',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'email' => 'Email',
			'orcamentoDesejado' => 'Orçamento Desejado',
			'time' => 'Data',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('razaoSocial',$this->razaoSocial,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('ddd',$this->ddd);
		$criteria->compare('telefone',$this->telefone);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('orcamentoDesejado',$this->orcamentoDesejado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}