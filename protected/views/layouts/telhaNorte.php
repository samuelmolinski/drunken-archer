<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/system.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/standard.css" media="screen" />

	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

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
</head>

<body>
<div>
	<?php echo $content; ?>
</div>
</body>
</html>
