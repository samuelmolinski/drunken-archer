<?php
/* @var $this TelevendasController */
/* @var $model Televendas */

$this->breadcrumbs=array(
	'Televendas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Televendas', 'url'=>array('index')),
	array('label'=>'Criar Televendas', 'url'=>array('create')),
	array('label'=>'Atualizar Televendas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Apagar Televendas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja apagar este item?')),
	array('label'=>'Administrar Televendas', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Ver Televendas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'razaoSocial',
		'cnpj',
		'ddd',
		'telefone',
		'cidade',
		'estado',
		'email',
		'orcamentoDesejado',
	),
)); ?>
