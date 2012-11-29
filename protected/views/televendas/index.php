<?php
/* @var $this TelevendasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Televendas',
);

$this->menu=array(
	array('label'=>'Criar Televendas', 'url'=>array('create')),
	array('label'=>'Administrar Televendas', 'url'=>array('admin')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);
?>

<h1>Televendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
