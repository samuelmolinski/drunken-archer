<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/system.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/standard.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/atendimento.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blitzer/jquery-ui-1.9.1.custom.css" media="screen" />

	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/messages_pt_BR.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.9.1.custom.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script type="text/javascript">	
		function limpaInputs(nomeinput, valor) {
		    if (nomeinput.value == valor) {
		        nomeinput.value = '';
		    }
		}

		function voltaInputs(nomeinput, valor) {
		    if (nomeinput.value == '') {
		        nomeinput.value = valor;
		    }
		}
	</script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>
</head>

<body>
<div id="formDialog" title="Telhanorte">
	<ul class="error"></ul>
	<div class="success"></div>
</div>
<div>
	<?php echo $content; ?>
	<div class="clear"></div>
</div>
</body>
</html>
