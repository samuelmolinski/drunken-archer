<?php
/* @var $this FaleConoscoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fale Conoscos',
);

$this->menu=array(
	array('label'=>'Create FaleConosco', 'url'=>array('create')),
	array('label'=>'Manage FaleConosco', 'url'=>array('admin')),
);
?>

<h1>Fale Conoscos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
