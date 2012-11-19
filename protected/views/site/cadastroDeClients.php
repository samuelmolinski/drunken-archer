<?php
	$form = $this -> beginWidget('CActiveForm', array(
		'id' => 'cadastroDeClients-form',
		'enableAjaxValidation' => false,
	));
?>
  
<?php echo $form->textField($model, 'nome', array('value'=>'Nome completo', 'class'=>'g required', 'onfocus' => 'limpaInputs(this,\'Nome completo\')', 'onblur' => 'voltaInputs(this,\'Nome completo\')')); ?>


<div id="UpdatePanel1">	
    <span class="clearfix" style="margin-left: 6px;">
        <span class="campo select bgselect">
            <span class="bgselectright" style="width: 45px;">
                <span id="lblUf">UF</span>
                <?php echo $form->dropDownList($model, 'uf', $states, array('value'=>'uf', 'class'=>'g required')); ?>
                
	        </span>
        </span>
    </span>							                        
</div>
<span class="campo gg">      
	<?php echo $form->textField($model, 'cidade', array('value'=>'Cidade', 'class'=>'g required', 'onfocus' => 'limpaInputs(this,\'Cidade\')', 'onblur' => 'voltaInputs(this,\'Cidade\')')); ?>
</span>
<span style="float:left;clear:both;">
    <label style="color:#777777;">Já doou para a MSF?</label>
    <br>

    <table id="rbtDoou" cellspacing="2" cellpadding="2" border="0"  style="float:left;clear:both;">
		<tbody>
			<tr>
				<td><span style="color: rgb(119, 119, 119);">
					<?php echo $form->radioButton($model, 'jahFezDoacoes', array('value'=>'1', 'id'=>'Newsletter_jahFezDoacoes01', 'class'=>'required')); ?>
					<label for="rbtDoou_0">Sim</label></span>
				</td>
				<td>
					<span style="color: rgb(119, 119, 119);">
						<?php echo $form->radioButton($model, 'jahFezDoacoes', array('value'=>'0', 'id'=>'Newsletter_jahFezDoacoes02', 'class'=>'required')); ?>
						<label for="rbtDoou_1">Não</label>
					</span>
				</td>
			</tr>
		</tbody>
	</table>
</span>
<input type='button' name="btnGravarUsuario" class="bot-enviar btn" id="btnGravarUsuario-fake" />
<?php
	echo CHtml::submitButton('', array('id'=>'btnGravarUsuario', 'name'=>"btnGravarUsuario", 'style'=>'display:none;'));
?>
<!-- <input type="image" name="btnGravarUsuario" id="btnGravarUsuario" class="bot-enviar" src="https://www.msf.org.br/imagens/botoes/bot-enviar-news.gif" onclick="return validaNewsLetterHome();" style="border-width:0px;"> -->
<?php $this -> endWidget(); ?>