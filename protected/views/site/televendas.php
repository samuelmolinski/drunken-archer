<?php
	$form = $this -> beginWidget('CActiveForm', array(
		'id' => 'cadastroDeClients-form',
		'enableAjaxValidation' => false,
	));

	/*return array(
			'id' => 'ID',
			'razaoSocial' => 'Razão Social',
			'cnpj' => 'CNPJ',
			'telefone' => 'Telefone',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'email' => 'Email',
			'orcamentoDesejado' => 'Orçamento Desejado',
		);*/

?>
  
<?php echo $form->textField($model, 'razaoSocial', array('value'=>'', 'class'=>'required')); ?>
<?php echo $form->textField($model, 'cnpj', array('value'=>'', 'class'=>'required')); ?>
<?php echo $form->textField($model, 'telefone', array('value'=>'', 'class'=>'required')); ?>
<?php echo $form->dropDownList($model,'cidade', CHtml::listData(Estados::model()->findAll(), 'id', 'sigla'), array('empty'=>'select Type')); ?>
<?php //echo $form->dropDownList($model, 'cidade', $states, array('value'=>'', 'class'=>'required')); ?>
<?php //echo $form->dropDownList($model, 'estado', $states, array('value'=>'', 'class'=>'required')); ?>
<?php echo $form->textField($model, 'email', array('value'=>'', 'class'=>'required')); ?>
<?php echo $form->textField($model, 'orcamentoDesejado', array('value'=>'', 'class'=>'required')); ?>

<input type='button' name="btnGravarUsuario" class="bot-enviar btn" id="btnGravar-fake" />
<?php echo CHtml::submitButton('', array('id'=>'btnGravarUsuario', 'name'=>"btnGravar", 'style'=>'display:none;')); ?>
<?php $this -> endWidget(); ?>

<script type="text/javascript">
  // I would like to call a url using jQuery?
  $.ajax({
    url: "<?php echo CController::createUrl('Cidade/generateFromState');?>"
  });
  function buscaEstados() {
	var uf = $('#Televendas_cidade').val();
		
	jQuery.ajax({
		type: 'POST',
		url: 'http://localhost/telhanorte/index.php/cidades/getCities',
		data: { 'estado': uf },
		success: function(data, textStatus, jqXHR) { console.log(data); },
		dataType: 'json'
	});
    
}
</script>