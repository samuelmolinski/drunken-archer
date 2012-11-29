<?php

/**
 * This is the model class for table "cadastroDeClientes".
 *
 * The followings are the available columns in table 'cadastroDeClientes':
 * @property integer $id
 * @property string $nomeCompleto
 * @property string $endereco
 * @property string $bairro
 * @property integer $estado
 * @property integer $cidade
 * @property integer $cep
 * @property string $email
 * @property string $cpf
 * @property string $dataDeNascimento
 * @property integer $sexo
 * @property string $escolaridade
 * @property string $profissao
 * @property string $estadaCivil
 * @property string $documentoDeIdentidade
 * @property integer $ddd
 * @property integer $telefone
 * @property integer $dddc
 * @property integer $celular
 * @property integer $ofertasDeSMS
 * @property integer $ofertasDeEmail
 */
class CadastroDeClientes extends CActiveRecord
{
	public $complemento;
	public $n;
	public $rua;


	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CadastroDeClientes the static model class
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
			array('nomeCompleto, endereco, bairro, cep, email, cpf, dataDeNascimento, escolaridade, profissao, estadaCivil, documentoDeIdentidade, ddd, telefone, dddc, celular, ofertasDeSMS, ofertasDeEmail', 'required'),
			array('cep,  ddd, telefone, dddc, celular, ofertasDeSMS, ofertasDeEmail', 'numerical', 'integerOnly'=>true),
			array('nomeCompleto, endereco, email, escolaridade, sexo, profissao', 'length', 'max'=>50),
			array('bairro', 'length', 'max'=>256),
			array('cpf', 'length', 'max'=>11),
			array('estadaCivil, documentoDeIdentidade', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nomeCompleto, endereco, bairro, estado, cidade, cep, email, cpf, dataDeNascimento, sexo, escolaridade, profissao, estadaCivil, documentoDeIdentidade, ddd, telefone, dddc, celular, ofertasDeSMS, ofertasDeEmail', 'safe', 'on'=>'search'),
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
			'rua' => 'Rua',
			'complemento' => 'Complemento',
			'n' => 'Nº',
			'nomeCompleto' => 'Nome Completo',
			'endereco' => 'Endereco',
			'bairro' => 'Bairro',
			'cep' => 'CEP',
			'email' => 'Email',
			'cpf' => 'CPF',
			'dataDeNascimento' => 'Data De Nascimento',
			'sexo' => 'Sexo',
			'escolaridade' => 'Escolaridade',
			'profissao' => 'Profissão',
			'estadaCivil' => 'Estado Civil',
			'documentoDeIdentidade' => 'Documento De Identidade',
			'ddd' => 'DDD',
			'telefone' => 'Telefone',
			'dddc' => 'DDD',
			'celular' => 'Celular',
			'ofertasDeSMS' => 'Ofertas De SMS',
			'ofertasDeEmail' => 'Ofertas De Email',
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
		$criteria->compare('nomeCompleto',$this->nomeCompleto,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('cidade',$this->cidade);
		$criteria->compare('cep',$this->cep);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('dataDeNascimento',$this->dataDeNascimento,true);
		$criteria->compare('sexo',$this->sexo);
		$criteria->compare('escolaridade',$this->escolaridade,true);
		$criteria->compare('profissao',$this->profissao,true);
		$criteria->compare('estadaCivil',$this->estadaCivil,true);
		$criteria->compare('documentoDeIdentidade',$this->documentoDeIdentidade,true);
		$criteria->compare('ddd',$this->ddd);
		$criteria->compare('telefone',$this->telefone);
		$criteria->compare('dddc',$this->dddc);
		$criteria->compare('celular',$this->celular);
		$criteria->compare('ofertasDeSMS',$this->ofertasDeSMS);
		$criteria->compare('ofertasDeEmail',$this->ofertasDeEmail);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}