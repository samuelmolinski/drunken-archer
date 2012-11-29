<?php
/* @var $this FaleConoscoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fale Conoscos',
);

$this->menu=array(
	array('label'=>'Criar FaleConosco', 'url'=>array('create')),
	array('label'=>'Administrar FaleConosco', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Fale Conoscos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
