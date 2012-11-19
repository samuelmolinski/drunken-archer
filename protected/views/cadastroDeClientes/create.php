<?php
/* @var $this CadastroDeClientesController */
/* @var $model CadastroDeClientes */

$this->breadcrumbs=array(
	'Cadastro De Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CadastroDeClientes', 'url'=>array('index')),
	array('label'=>'Manage CadastroDeClientes', 'url'=>array('admin')),
);
?>

<h1>Create CadastroDeClientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>