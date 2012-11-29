<?php
/* @var $this TelevendasController */
/* @var $model Televendas */

$this->breadcrumbs=array(
	'Televendas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Televendas', 'url'=>array('index')),
	array('label'=>'Criar Televendas', 'url'=>array('create')),
	array('label'=>'Ver Televendas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Televendas', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Atualizar Televendas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>