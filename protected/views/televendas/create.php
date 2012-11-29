<?php
/* @var $this TelevendasController */
/* @var $model Televendas */

$this->breadcrumbs=array(
	'Televendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Televendas', 'url'=>array('index')),
	array('label'=>'Administrar Televendas', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Criar Televendas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>