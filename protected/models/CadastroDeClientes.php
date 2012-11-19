<?php

/**
 * This is the model class for table "cadastroDeClientes".
 *
 * The followings are the available columns in table 'cadastroDeClientes':
 * @property integer $id
 * @property string $nomeCompleto
 * @property string $enderecoCompleto
 * @property string $email
 * @property string $cpf
 * @property string $dataDeNascimento
 * @property integer $sexo
 * @property string $escolaridade
 * @property string $profissao
 * @property string $estadaCivil
 * @property string $documentoDeIdentidade
 * @property integer $telefone
 * @property integer $celular
 * @property integer $ofertasDeSMS
 * @property integer $ofertasDeEmail
 */
class CadastroDeClientes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return cadastroDeClientes the static model class
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
		return 'cadastroDeClientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomeCompleto, enderecoCompleto, email, cpf, dataDeNascimento, sexo, escolaridade, profissao, estadaCivil, documentoDeIdentidade, telefone, celular, ofertasDeSMS, ofertasDeEmail', 'required'),
			array('sexo, telefone, celular, ofertasDeSMS, ofertasDeEmail', 'numerical', 'integerOnly'=>true),
			array('nomeCompleto, enderecoCompleto, email, escolaridade, profissao', 'length', 'max'=>50),
			array('cpf', 'length', 'max'=>11),
			array('estadaCivil, documentoDeIdentidade', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nomeCompleto, enderecoCompleto, email, cpf, dataDeNascimento, sexo, escolaridade, profissao, estadaCivil, documentoDeIdentidade, telefone, celular, ofertasDeSMS, ofertasDeEmail', 'safe', 'on'=>'search'),
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
			'nomeCompleto' => 'Nome Completo',
			'enderecoCompleto' => 'Endereco Completo',
			'email' => 'Email',
			'cpf' => 'Cpf',
			'dataDeNascimento' => 'Data De Nascimento',
			'sexo' => 'Sexo',
			'escolaridade' => 'Escolaridade',
			'profissao' => 'Profissao',
			'estadaCivil' => 'Estada Civil',
			'documentoDeIdentidade' => 'Documento De Identidade',
			'telefone' => 'Telefone',
			'celular' => 'Celular',
			'ofertasDeSMS' => 'Ofertas De Sms',
			'ofertasDeEmail' => 'Ofertas De Email',
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
		$criteria->compare('nomeCompleto',$this->nomeCompleto,true);
		$criteria->compare('enderecoCompleto',$this->enderecoCompleto,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('dataDeNascimento',$this->dataDeNascimento,true);
		$criteria->compare('sexo',$this->sexo);
		$criteria->compare('escolaridade',$this->escolaridade,true);
		$criteria->compare('profissao',$this->profissao,true);
		$criteria->compare('estadaCivil',$this->estadaCivil,true);
		$criteria->compare('documentoDeIdentidade',$this->documentoDeIdentidade,true);
		$criteria->compare('telefone',$this->telefone);
		$criteria->compare('celular',$this->celular);
		$criteria->compare('ofertasDeSMS',$this->ofertasDeSMS);
		$criteria->compare('ofertasDeEmail',$this->ofertasDeEmail);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}