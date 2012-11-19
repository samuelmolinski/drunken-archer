<?php
/* @var $this TelevendasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Televendases',
);

$this->menu=array(
	array('label'=>'Create Televendas', 'url'=>array('create')),
	array('label'=>'Manage Televendas', 'url'=>array('admin')),
);
?>

<h1>Televendases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
