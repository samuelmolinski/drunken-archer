<?php
/* @var $this CadastroDeClientesController */
/* @var $model CadastroDeClientes */

$this->breadcrumbs=array(
	'Cadastro De Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar CadastroDeClientes', 'url'=>array('index')),
	array('label'=>'Criar CadastroDeClientes', 'url'=>array('create')),
	array('label'=>'Atualizar CadastroDeClientes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Apagar CadastroDeClientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja apagar este item?')),
	array('label'=>'Administrar CadastroDeClientes', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Ver CadastroDeClientes #<?php echo $model->id; ?></h1>

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
