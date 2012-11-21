<?php
/* @var $this CadastroDeClientesController */
/* @var $model CadastroDeClientes */

$this->breadcrumbs=array(
	'Cadastro De Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CadastroDeClientes', 'url'=>array('index')),
	array('label'=>'Create CadastroDeClientes', 'url'=>array('create')),
	array('label'=>'Update CadastroDeClientes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CadastroDeClientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CadastroDeClientes', 'url'=>array('admin')),
);
?>

<h1>View CadastroDeClientes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomeCompleto',
		'endereco',
		'bairro',
		'estado',
		'cidade',
		'cep',
		'email',
		'cpf',
		'dataDeNascimento',
		'sexo',
		'escolaridade',
		'profissao',
		'estadaCivil',
		'documentoDeIdentidade',
		'ddd',
		'telefone',
		'dddc',
		'celular',
		'ofertasDeSMS',
		'ofertasDeEmail',
	),
)); ?>
