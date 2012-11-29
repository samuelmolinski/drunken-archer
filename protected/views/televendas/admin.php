<?php
/* @var $this TelevendasController */
/* @var $model Televendas */

$this->breadcrumbs=array(
	'Televendas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Televendas', 'url'=>array('index')),
	array('label'=>'Criar Televendas', 'url'=>array('create')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('televendas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Televendas</h1>

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
	'id'=>'televendas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'razaoSocial',
		'cnpj',
		'ddd',
		'telefone',
		'cidade',
		/*
		'estado',
		'email',
		'orcamentoDesejado',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
