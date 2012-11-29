<!-- <div class="middleContainer">
	<div class="pgTitle clearfix">
		<h2>Cadastro de Clientes</h2>
	</div>
</div> --><!--middleContainer-->
<div class="middleContainer">
	<?php
		$form = $this -> beginWidget('CActiveForm', array(
			'id' => 'cadastroDeClientes-form',
			'enableAjaxValidation' => false,
			'action' => 'http://telhanorte.com.br/formularios/index.php/site/cadastroDeClientes'
			//'htmlOptions'=>array('class'=>'cabanaforms')
		));

	?>
		<!-- <?php echo $form->errorSummary($model); ?> -->
		<div id="columnLeft50" class="cabanaforms">
			<div class="grp">
				<?php echo $form->labelEx($model,'nomeCompleto', array('class' => 'obr')); ?>
				<?php echo $form->textField($model, 'nomeCompleto', array('value'=>'', 'class'=>'fitext required')); ?>
			</div> 

			<div class="grp">
				<?php echo $form->labelEx($model,'rua'); ?>
				<?php echo $form->dropDownList($model, 'rua', array('aeroporto'=>'Aeroporto',
																	'alameda'=>'Alameda',
																	'area'=>'Área',
																	'avenida'=>'Avenida',
																	'campo'=>'Campo',
																	'chacara'=>'Chácara',
																	'colonia'=>'Colônia',
																	'condomínio'=>'Condomínio',
																	'conjunto'=>'Conjunto',
																	'distrito'=>'Distrito',
																	'esplanada'=>'Esplanada',
																	'estacao'=>'Estação',
																	'favela'=>'Favela',
																	'feira'=>'Feira',
																	'jardim'=>'Jardim',
																	'ladeira'=>'Ladeira',
																	'lago'=>'Lago',
																	'lagoa'=>'Lagoa',
																	'largo'=>'Largo',
																	'loteamento'=>'Loteamento',
																	'morro'=>'Morro',
																	'nucleo'=>'Núcleo',
																	'parque'=>'Parque',
																	'passarela'=>'Passarela',
																	'patio'=>'Pátio',
																	'praca'=>'Praça',
																	'quadra'=>'Quadra',
																	'recanto'=>'Recanto',
																	'residencial'=>'Residencial',
																	'rua'=>'Rua',
																	'setor'=>'Setor',
																	'sitio'=>'Sítio',
																	'travessa'=>'Travessa',
																	'trecho'=>'Trecho',
																	'trevo'=>'Trevo',
																	'vale'=>'Vale',
																	'via'=>'Via',
																	'viaduto'=>'Viaduto',
																	'viela'=>'Viela',
																	'vila'=>'Vila',), array('class'=>'', 'options' => array('rua'=>array('selected'=>true)))); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'endereco', array('class' => 'obr')); ?>
				<?php echo $form->textField($model, 'endereco', array('value'=>'', 'class'=>'fitext required')); ?>
			</div> 

			<div class="grp">
				<?php echo $form->labelEx($model,'n', array('class' => 'obr')); ?>
				<?php echo $form->textField($model, 'n', array('value'=>'', 'class'=>'fitext required onlyInt')); ?>
			</div> 

			<div class="grp">
				<?php echo $form->labelEx($model,'complemento', array('class' => 'obr')); ?>
				<?php echo $form->textField($model, 'complemento', array('value'=>'', 'class'=>'fitext required')); ?>
			</div> 

			<div class="grp">
				<?php echo $form->labelEx($model,'bairro', array('class' => 'obr')); ?>
				<?php echo $form->textField($model, 'bairro', array('value'=>'', 'class'=>'fitext required')); ?>
			</div> 

			<div class="grp">
				<?php echo $form->labelEx($model,'estado'); ?>
				<?php echo $form->dropDownList($model,'estado', CHtml::listData(Estados::model()->findAll(), 'nome', 'nome'), array('empty'=>'Selecione um estado','autocomplete'=>'off')); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'cidade'); ?>
				<?php echo $form->dropDownList($model, 'cidade', array('empty'=>'Selecione uma cidade'), array('value'=>'', 'class'=>'required')); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'cep', array('class' => 'obr')); ?>
				<?php echo $form->textField($model, 'cep', array('value'=>'', 'class'=>'fitext required onlyInt', 'maxlength'=>8)); ?>
			</div> 	

			<div class="grp">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model, 'email', array('value'=>'', 'class'=>'fitext required')); ?>
			</div>
		</div>
		<div id="columnRight50" class="cabanaforms">	

			<div class="grp">
				<?php echo $form->labelEx($model,'cpf'); ?>
				<?php echo $form->textField($model, 'cpf', array('value'=>'', 'class'=>'fitext required onlyInt')); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'dataDeNascimento'); ?>
				<?php echo $form->textField($model, 'dataDeNascimento', array('value'=>'', 'class'=>'fitext required')); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'sexo'); ?>
				<?php echo $form->radioButtonList($model, 'sexo', array('1'=>'masculino','0'=>'feminino'), array('template'=>'<div class="checkBoxListSet">{input}{label}</div>', 'separator'=>'', 'class'=>'checkBoxList', 'labelOptions'=>array('class'=>'checkBoxLabel'))); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'escolaridade'); ?>
				<?php echo $form->dropDownList($model, 'escolaridade', array(
																	'Ensino Fundamental'=>'Ensino Fundamental',
																	'Ensino Médio'=>'Ensino Médio',
																	'Superior Incompleto'=>'Superior Incompleto',
																	'Superior Completo'=>'Superior Completo',
																	'Pós Graduação'=>'Pós Graduação',
																	'MBA'=>'MBA',), array('class'=>'', 'options' => array('Ensino Fundamental'=>array('selected'=>true)))); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'profissao'); ?>
				<?php echo $form->dropDownList($model, 'profissao', array(
																	'Acionista'=>'Acionista',
																	'Administrador'=>'Administrador',
																	'Advogado'=>'Advogado',
																	'Ambientalista'=>'Ambientalista',
																	'Ambulante'=>'Ambulante',
																	'Amolador'=>'Amolador',
																	'Arquiteto'=>'Arquiteto',
																	'Artesão'=>'Artesão',
																	'Atendente'=>'Atendente',
																	'Atleta'=>'Atleta',
																	'Atuário'=>'Atuário',
																	'Ator'=>'Ator',
																	'Auditor'=>'Auditor',
																	'Autônomo'=>'Autônomo',
																	'Auxiliar'=>'Auxiliar',
																	'Babá'=>'Babá',
																	'Balconista'=>'Balconista',
																	'Bancário'=>'Bancário',
																	'Barbeiro'=>'Barbeiro',
																	'Bibliotecário'=>'Bibliotecário',
																	'Biólogo'=>'Biólogo',
																	'Bombeiro'=>'Bombeiro',
																	'Cantor'=>'Cantor',
																	'Cenógrafo'=>'Cenógrafo',
																	'Consultor'=>'Consultor',
																	'Costureiro'=>'Costureiro',
																	'Cozinheiro'=>'Cozinheiro',
																	'Dancarino'=>'Dançarino',
																	'Delegado'=>'Delegado',
																	'Dentista'=>'Dentista',
																	'Dermatologista'=>'Dermatologista',
																	'Designer'=>'Designer',
																	'Despachante'=>'Despachante',
																	'Doméstico'=>'Doméstico',
																	'Economista'=>'Economista',
																	'Empregada Doméstica'=>'Empregada Doméstica',
																	'Enfermeira/Enfermeiro'=>'Enfermeira/Enfermeiro',
																	'Engenheiro'=>'Engenheiro',
																	'Estudante'=>'Estudante',
																	'Farmacêutico'=>'Farmacêutico',
																	'Filósofo'=>'Filósofo',
																	'Fisioterapeuta'=>'Fisioterapeuta',
																	'Fotógrafo'=>'Fotógrafo',
																	'Garçom'=>'Garçom',
																	'Garçonete'=>'Garçonete',
																	'Gari'=>'Gari',
																	'Geólogo'=>'Geólogo',
																	'Jardineiro'=>'Jardineiro',
																	'Jornalista'=>'Jornalista',
																	'Juiz/Juíza'=>'Juiz/Juíza',
																	'Manicure'=>'Manicure',
																	'Manobrista'=>'Manobrista',
																	'Massagista'=>'Massagista',
																	'Médico'=>'Médico',
																	'Motorista'=>'Motorista',
																	'Músico'=>'Músico',
																	'Nutricionista'=>'Nutricionista',
																	'Bibliotecário'=>'Bibliotecário',
																	'Biólogo'=>'Biólogo',
																	'Bombeiro'=>'Bombeiro',
																	'Office-Boy'=>'Office-Boy',
																	'Operário'=>'Operário',
																	'Padeiro'=>'Padeiro',
																	'Professor'=>'Professor',
																	'Psicólogo'=>'Psicólogo',
																	'Publicitário'=>'Publicitário',
																	'Recepcionista'=>'Recepcionista',
																	'Secretária/Secretário'=>'Secretária/Secretário',
																	'Segurança'=>'Segurança',
																	'Vendedor'=>'Vendedor',
																	'Veterinário'=>'Veterinário',
																	'Web Designer'=>'Web Designer',), array('class'=>'')); ?>
			</div>
			
			<div class="grp">
				<?php echo $form->labelEx($model,'estadaCivil'); ?>
				<?php echo $form->dropDownList($model, 'estadaCivil', array(
																	'Solteiro'=>'Solteiro',
																	'Casado'=>'Casado',
																	'Divorciado'=>'Divorciado',
																	'Viúvo'=>'Viúvo',), array('class'=>'', 'options' => array('Solteiro'=>array('selected'=>true)))); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'documentoDeIdentidade'); ?>
				<?php echo $form->textField($model, 'documentoDeIdentidade', array('value'=>'', 'class'=>'fitext required onlyInt')); ?>
			</div>

			<div class="grp fMulti fTelefone">
				<?php echo $form->labelEx($model,'telefone'); ?>
				<?php echo $form->textField($model, 'ddd', array('value'=>'', 'class'=>'DDD required onlyInt', 'maxlength'=>2)); ?>
				<?php echo $form->textField($model, 'telefone', array('value'=>'', 'class'=>' required onlyInt', 'maxlength'=>9)); ?>
			</div>

			<div class="grp fMulti fTelefone">
				<?php echo $form->labelEx($model,'celular'); ?>
				<?php echo $form->textField($model, 'dddc', array('value'=>'', 'class'=>'DDD required onlyInt', 'maxlength'=>2)); ?>
				<?php echo $form->textField($model, 'celular', array('value'=>'', 'class'=>' required onlyInt', 'maxlength'=>9)); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'ofertasDeSMS'); ?>
				<?php echo $form->radioButtonList($model, 'ofertasDeSMS', array('1'=>'Sim','0'=>'Não'), array('template'=>'<div class="checkBoxListSet">{input}{label}</div>', 'separator'=>'', 'class'=>'checkBoxList', 'labelOptions'=>array('class'=>'checkBoxLabel'))); ?>
			</div>

			<div class="grp">
				<?php echo $form->labelEx($model,'ofertasDeEmail'); ?>
				<?php echo $form->radioButtonList($model, 'ofertasDeEmail', array('1'=>'Sim','0'=>'Não'), array('template'=>'<div class="checkBoxListSet">{input}{label}</div>', 'separator'=>'', 'class'=>'checkBoxList', 'labelOptions'=>array('class'=>'checkBoxLabel'))); ?>
			</div>

			<div class="grp enviar">
				<?php echo CHtml::submitButton('', array('id'=>'btnGravarUsuario', 'class'=>'bt', 'name'=>"btnGravar", 'value'=>'Enviar'));//  ?>
			</div>
		</div>
	<?php $this -> endWidget(); ?>
</div><!--middleContainer-->


