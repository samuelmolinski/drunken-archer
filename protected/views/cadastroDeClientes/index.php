<?php
/* @var $this CadastroDeClientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cadastro De Clientes',
);

$this->menu=array(
	array('label'=>'Criar CadastroDeClientes', 'url'=>array('create')),
	array('label'=>'Administrar CadastroDeClientes', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Cadastro De Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
