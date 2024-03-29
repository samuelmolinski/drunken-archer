<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Fale Conosco', 'url'=>array('/faleConosco/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Cadastro De Clientes', 'url'=>array('/cadastroDeClientes/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Televendas', 'url'=>array('/televendas/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Estados', 'url'=>array('/estados/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Cidades', 'url'=>array('/cidades/index'), 'visible'=>!Yii::app()->user->isGuest),
				/*array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),*/
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Telhanorte.<br/>
		Todos os direitos reservados.<br/>
		Criado por <a href="http://www.cabanacriacao.com/" target="_blank">Cabana Criacão</a>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
