<?php
/* @var $this FaleConoscoController */
/* @var $model FaleConosco */

$this->breadcrumbs=array(
	'Fale Conoscos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FaleConosco', 'url'=>array('index')),
	array('label'=>'Administrar FaleConosco', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Criar FaleConosco</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>