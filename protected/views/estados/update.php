<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estado'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Criar Estados', 'url'=>array('create')),
	array('label'=>'Ver Estados', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Atualizar Estados <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>