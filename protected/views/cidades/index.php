<?php
/* @var $this CidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cidades',
);

$this->menu=array(
	array('label'=>'Create Cidades', 'url'=>array('create')),
	array('label'=>'Manage Cidades', 'url'=>array('admin')),
);
?>

<h1>Cidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
