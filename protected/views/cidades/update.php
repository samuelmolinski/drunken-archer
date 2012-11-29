<?php
/* @var $this CidadesController */
/* @var $model Cidades */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Cidades', 'url'=>array('index')),
	array('label'=>'Criar Cidades', 'url'=>array('create')),
	array('label'=>'Ver Cidades', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Cidades', 'url'=>array('admin')),
);
?>

<h1>Atualizar Cidades <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>