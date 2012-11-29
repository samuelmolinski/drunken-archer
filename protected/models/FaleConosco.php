<?php

/**
 * This is the model class for table "faleConosco".
 *
 * The followings are the available columns in table 'faleConosco':
 * @property integer $id
 * @property string $nome
 * @property string $email
 * @property string $cpf
 * @property integer $ddd
 * @property integer $telefone
 * @property string $cidade
 * @property string $estado
 * @property integer $loja
 * @property string $assunto
 * @property string $messagem
 */
class FaleConosco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FaleConosco the static model class
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
		return 'faleConosco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, email, cpf, ddd, telefone, cidade, estado, loja, assunto, messagem', 'required'),
			array('ddd, telefone', 'numerical', 'integerOnly'=>true),
			array('nome, email, assunto, loja', 'length', 'max'=>50),
			array('cpf', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, email, cpf, ddd, telefone, cidade, estado, loja, assunto, messagem', 'safe', 'on'=>'search'),
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
			'nome' => 'Nome',
			'email' => 'Email',
			'cpf' => 'CPF',
			'ddd' => 'DDD',
			'telefone' => 'Telefone',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'loja' => 'Loja',
			'assunto' => 'Assunto',
			'messagem' => 'Messagem',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('ddd',$this->ddd);
		$criteria->compare('telefone',$this->telefone);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('loja',$this->loja);
		$criteria->compare('assunto',$this->assunto,true);
		$criteria->compare('messagem',$this->messagem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}