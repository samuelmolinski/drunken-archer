<?php
/* @var $this FaleConoscoController */
/* @var $model FaleConosco */

$this->breadcrumbs=array(
	'Fale Conoscos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FaleConosco', 'url'=>array('index')),
	array('label'=>'Criar FaleConosco', 'url'=>array('create')),
	array('label'=>'Atualizar FaleConosco', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Apagar FaleConosco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja apagar este item?')),
	array('label'=>'Administrar FaleConosco', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Ver FaleConosco #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'email',
		'cpf',
		'ddd',
		'telefone',
		'cidade',
		'estado',
		'loja',
		'assunto',
		'messagem',
	),
)); ?>
