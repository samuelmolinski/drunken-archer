<?php
/* @var $this CadastroDeClientesController */
/* @var $model CadastroDeClientes */

$this->breadcrumbs=array(
	'Cadastro De Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar CadastroDeClientes', 'url'=>array('index')),
	array('label'=>'Criar CadastroDeClientes', 'url'=>array('create')),
	array('label'=>'Ver CadastroDeClientes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar CadastroDeClientes', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Atualizar CadastroDeClientes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>