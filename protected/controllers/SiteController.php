<?php

class SiteController extends Controller
{
	public $layout;
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	/*

	*/
	public function actionCadastroDeClientes() {
		$this->layout = 'telhaNorte';
		$this->pageTitle = 'Cadastro De Clientes';
		$states = Estados::model()->findAll(
	          array(
	            'select'=>array('id', 'sigla', 'nome'),
	            'group'=>'id',
	            'order'=>'sigla DESC'
	          )
	      );

		$model = new CadastroDeClientes();
		if(isset($_POST['CadastroDeClientes']))
		{
			//d($_POST);
			$model->attributes=$_POST['CadastroDeClientes'];
			$model->endereco = $_POST['CadastroDeClientes']['rua'].' '.$_POST['CadastroDeClientes']['endereco'].' '.$_POST['CadastroDeClientes']['n'].' '.$_POST['CadastroDeClientes']['complemento'];
			/*$model->nomeCompleto = $_POST['CadastroDeClientes']['nomeCompleto'];
			$model->bairro = $_POST['CadastroDeClientes']['bairro'];
			$model->cep = $_POST['CadastroDeClientes']['cep'];
			$model->email = $_POST['CadastroDeClientes']['email'];
			$model->cpf = $_POST['CadastroDeClientes']['cpf'];
			$model->dataDeNascimento = $_POST['CadastroDeClientes']['dataDeNascimento'];
			$model->sexo = $_POST['CadastroDeClientes']['sexo'];
			$model->escolaridade = $_POST['CadastroDeClientes']['escolaridade'];
			$model->profissao = $_POST['CadastroDeClientes']['profissao'];
			$model->estadaCivil = $_POST['CadastroDeClientes']['estadaCivil'];
			$model->documentoDeIdentidade = $_POST['CadastroDeClientes']['documentoDeIdentidade'];
			$model->ddd = $_POST['CadastroDeClientes']['ddd'];
			$model->telefone = $_POST['CadastroDeClientes']['telefone'];
			$model->dddc = $_POST['CadastroDeClientes']['dddc'];
			$model->celular = $_POST['CadastroDeClientes']['celular'];
			$model->ofertasDeSMS = $_POST['CadastroDeClientes']['ofertasDeSMS'][0];
			$model->ofertasDeEmail = $_POST['CadastroDeClientes']['ofertasDeEmail'][0];*/
			//d($model);
			//exit;
			if($model->save()) {

				$this->sendReport($model);
				$this->redirect(array('site/CadastroDeClientes', 'msg'=> '1'));
			}
				
		}

		$this->render('cadastroDeClientes', array('model'=>$model, 'states'=> $states));
	}
	public function actionFaleConosco() {
		$this->layout = 'telhaNorte';
		$this->pageTitle = 'Fale Conosco';
		$states = Estados::model()->findAll(
	          array(
	            'select'=>array('id', 'sigla', 'nome'),
	            'group'=>'id',
	            'order'=>'sigla DESC'
	          )
	      );

		$model = new FaleConosco;
		if(isset($_POST['FaleConosco']))
		{
			//d($_POST);
			$model->attributes=$_POST['FaleConosco'];
			if($model->save()) {
				$this->sendReport($model);
				$this->redirect(array('site/FaleConosco','msg'=> '1'));
			}
				
		}

		$this->render('faleConosco', array('model'=>$model, 'states'=> $states));
	}
	public function actionTelevendas() {
		$this->layout = 'telhaNorte';
		$this->pageTitle = 'Televendas';
		$states = Estados::model()->findAll(
	          array(
	            'select'=>array('id', 'sigla', 'nome'),
	            'group'=>'id',
	            'order'=>'sigla DESC'
	          )
	      );

		$model=new Televendas;

		if(isset($_POST['Televendas']))
		{
			$model->attributes=$_POST['Televendas'];
			if($model->save()) {

				$this->sendReport($model);
				$this->redirect(array('site/televendas','msg'=> '1'));
			}
				
		}

		$this->render('televendas', array('model'=>$model, 'states'=> $states));
	}

	/*public function actionTestEmail() {
		$this->layout = 'blank';
		$model=new CadastroDeClientes;
		$criteria=new CDbCriteria;
		$criteria->select='*';  // only select the 'title' column
		$criteria->condition='id=:ID';
		$criteria->params=array(':ID'=>1);
		$model = CadastroDeClientes::model()->find($criteria);
		$states = Estados::model()->findAll(
	          array(
	            'select'=>array('id', 'sigla', 'nome'),
	            'group'=>'id',
	            'order'=>'sigla DESC'
	          )
	      );

		$this->sendReport($model);
		$this->render('testEmail', array('model'=>$model, 'states'=> $states));
	}*/

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	protected function performAjaxValidation($model)
	{
	    if(isset($_POST['ajax']) && $_POST['ajax']==='televendas-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	}

	protected function sendReport($model) {

		if('Televendas' == get_class($model)){
			$to = 'televendas@telhanorte.com.br';
			//$to = 'contato@cabanacriacao.com';
			$fromName = 'Televendas';
		} elseif('CadastroDeClientes' == get_class($model)){
			$to = 'atendimento@telhanorte.com.br';
			//$to = 'contato@cabanacriacao.com';
			$fromName = 'Cadastro De Clientes';
		} elseif ('FaleConosco' == get_class($model)){
			$to = 'atendimento@telhanorte.com.br';
			//$to = 'contato@cabanacriacao.com';
			$fromName = 'Fale Conosco';
		}

		$labels = $model->attributeLabels();
		$attr = $model->attributes;
		foreach ($attr as $key => $value) {
			if(null == $value) {
				unset($attr[$key]);
			}
		}
		$table = "<table>";
			foreach ($attr as $key => $value) {
				if(isset($labels[$key])&&('time'!=$key)){
					$table .= "<tr><td style='padding: 0.5em 1em;'>". htmlspecialchars($labels[$key]) ."</td><td style='padding: 0.5em 1em;'>". htmlspecialchars($value) ."</td></tr>\n";
				}
			}		

		$table .= "</table>";

		$mail             = new PHPMailer(); // defaults to using php "mail()"
		$mail->CharSet = 'UTF-8';
		$body             = '<html style="height:100%;" >
	<head>	
		<meta charset="UTF-8" />
	</head>
	<body bgcolor="#cccccc" style="height:100%; font-family: sans-serif;font-size: 14px;line-height: 1.25;color: #006fa5;">
		<div style="width:600px;margin:auto;background-color:#efefef;">
			<div style="width:80%;padding: 10%;"><h2>'.$fromName.'</h2>'.$table.
			'</div>			
		</div>
	</body>
</html>';
		$mail->From = 'no-reply@telhanorte.com.br';
		$mail->FromName = $fromName;
		$mail->AddReplyTo($attr['email'], 'Novo Contato');

		$mail->IsHTML(true);
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPAuth   = false;                  // enable SMTP authentication
		$mail->Username   = "no-reply@telhanorte.com.br"; // SMTP account username
		$mail->Password   = "telhanorte2012";        // SMTP account password

		$mail->Subject    = 'Novo contato: '.$fromName;
		$mail->AddAddress($to, 'Telhe Norte'); //$_POST['Newsletter_nome']

		$mail->Body = $body;
		$s = $mail->Send();	
		//d($mail);
	}
}