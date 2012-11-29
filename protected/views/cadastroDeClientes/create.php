<?php
/* @var $this CadastroDeClientesController */
/* @var $model CadastroDeClientes */

$this->breadcrumbs=array(
	'Cadastro De Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar CadastroDeClientes', 'url'=>array('index')),
	array('label'=>'Administrar CadastroDeClientes', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Criar CadastroDeClientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>