<?php
/* @var $this CadastroDeClientesController */
/* @var $model CadastroDeClientes */

$this->breadcrumbs=array(
	'Cadastro De Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CadastroDeClientes', 'url'=>array('index')),
	array('label'=>'Create CadastroDeClientes', 'url'=>array('create')),
	array('label'=>'View CadastroDeClientes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CadastroDeClientes', 'url'=>array('admin')),
);
?>

<h1>Update CadastroDeClientes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>