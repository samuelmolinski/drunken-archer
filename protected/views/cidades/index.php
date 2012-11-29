<?php
/* @var $this CidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cidades',
);

$this->menu=array(
	array('label'=>'Criar Cidades', 'url'=>array('create')),
	array('label'=>'Administrar Cidades', 'url'=>array('admin')),
);
?>

<h1>Cidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
