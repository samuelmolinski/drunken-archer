<?php
/* @var $this CadastroDeClientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cadastro De Clientes',
);

$this->menu=array(
	array('label'=>'Create CadastroDeClientes', 'url'=>array('create')),
	array('label'=>'Manage CadastroDeClientes', 'url'=>array('admin')),
);
?>

<h1>Cadastro De Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
