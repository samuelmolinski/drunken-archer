<?php
/* @var $this FaleConoscoController */
/* @var $model FaleConosco */

$this->breadcrumbs=array(
	'Fale Conoscos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FaleConosco', 'url'=>array('index')),
	array('label'=>'Criar FaleConosco', 'url'=>array('create')),
	array('label'=>'Ver FaleConosco', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FaleConosco', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Atualizar FaleConosco <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>