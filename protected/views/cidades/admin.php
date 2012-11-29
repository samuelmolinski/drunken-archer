<?php
/* @var $this CidadesController */
/* @var $model Cidades */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Cidades', 'url'=>array('index')),
	array('label'=>'Criar Cidades', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cidades-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Cidades</h1>

<p>
Você pode ocionalmente utilizar um operador de comparação(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no começo de cada um dos valores de busca para especificar como a comparação deve ser processada.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cidades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_uf',
		'nome',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
