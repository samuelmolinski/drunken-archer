<?php
/* @var $this FaleConoscoController */
/* @var $model FaleConosco */

$this->breadcrumbs=array(
	'Fale Conoscos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar FaleConosco', 'url'=>array('index')),
	array('label'=>'Criar FaleConosco', 'url'=>array('create')),
	array('label'=>'Exportar para Excel', 'url'=>array('export')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('fale-conosco-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Fale Conoscos</h1>

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
	'id'=>'fale-conosco-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'email',
		'cpf',
		'ddd',
		'telefone',
		/*
		'cidade',
		'estado',
		'loja',
		'assunto',
		'messagem',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
