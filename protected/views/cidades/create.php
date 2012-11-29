<?php
/* @var $this CidadesController */
/* @var $model Cidades */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Cidades', 'url'=>array('index')),
	array('label'=>'Administrar Cidades', 'url'=>array('admin')),
);
?>

<h1>Criar Cidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>