<?php
/* @var $this EstadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado',
);

$this->menu=array(
	array('label'=>'Criar Estados', 'url'=>array('create')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Estado</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
