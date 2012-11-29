if(!window.log) {window.log = function() {log.history = log.history || [];log.history.push(arguments);if(this.console) {console.log(Array.prototype.slice.call(arguments));}};}

(function (window, $, undefined) {
	$(document).ready(function(){
		log('ready...');

		$('.onlyInt').keyup(function(){
			var v = $(this).val();
			$(this).val(v.replace(/\D/g, ""));
		});

		$( "#formDialog" ).dialog({
			autoOpen: false, 
			modal: true,
			close: function(event, ui) {
	            $("#formDialog .success p").remove();
	        },
		});
		if(null != getUrlVars()["msg"]) {
			var pass = getUrlVars()["msg"]
			if(pass){
				$("#formDialog .success").append('<p>Contato enviado com sucesso. Obrigado!</p>');
			} else {
				$("#formDialog .success").append('<p>Tente novamente mais tarde.</p>');
			}
			$("#formDialog" ).dialog( "open" );

		}
		if($('#Televendas_estado, #CadastroDeClientes_estado, #FaleConosco_estado').val() != '') {

			log('calling ajax (init)');
			var param = {'estado': $(this).val()};
			log(param);
			$.ajax({
				url: 'http://telhanorte.com.br/formularios/index.php/Cidades/GetCities',
				//url: 'http://telhanorte.hospedagemdesites.ws/formularios/index.php/Cidades/GetCities',
				//url: 'http://192.168.0.22/telhanorte/index.php/Cidades/GetCities',
				type: 'post',
				data: param,
				dataType: "json",
				//async: false,
				success: function(ret) {
					log(ret);
					$('#Televendas_cidade option, #CadastroDeClientes_cidade option, #FaleConosco_cidade option').remove();
					for (var i = ret.length - 1; i >= 0; i--) {
						opt = '<option value="'+ret[i].nome+'">'+ret[i].nome+'</option>';
						$("#Televendas_cidade, #FaleConosco_cidade, #CadastroDeClientes_cidade").append(opt);
					};
				},
			    error: function(XMLHttpRequest, textStatus, errorThrown){
					log(XMLHttpRequest, textStatus, errorThrown);
			    }
			});
		}
		$('#Televendas_estado, #CadastroDeClientes_estado, #FaleConosco_estado').change(function(){
			//window.console.log('change...');
			log('calling ajax (change)');
			var param = {'estado': $(this).val()};
			log(param);
			$.ajax({
				url: 'http://telhanorte.com.br/formularios/index.php/Cidades/GetCities',
				//url: 'http://telhanorte.hospedagemdesites.ws/formularios/index.php/Cidades/GetCities',
				//url: 'http://192.168.0.22/telhanorte/index.php/Cidades/GetCities',
				type: 'post',
				data: param,
				dataType: "json",
				//async: false,
				success: function(ret) {
					log(ret);
					$('#Televendas_cidade option, #CadastroDeClientes_cidade option, #FaleConosco_cidade option').remove();
					for (var i = ret.length - 1; i >= 0; i--) {
						opt = '<option value="'+ret[i].nome+'">'+ret[i].nome+'</option>';
						$("#Televendas_cidade, #FaleConosco_cidade, #CadastroDeClientes_cidade").append(opt);
						//window.console.log(ret[i].id);
						//window.console.log(ret[i].nome);
					};
				},
			    error: function(XMLHttpRequest, textStatus, errorThrown){
					log(XMLHttpRequest, textStatus, errorThrown);
			    }
			});
		})

		// validate signup form on keyup and submit
		log('validation...');
		$.validator.addMethod("comboEstado", function(value) {
			return (value != "empty")&&(value != "")&&(value != null);
		}, 'Selecione um estado.');
		$.validator.addMethod("comboCidade", function(value) {
			return (value != "empty")&&(value != "")&&(value != null);
		}, 'Selecione um cidade.');
		$.validator.addMethod("comboAssunto", function(value) {
			return (value != "empty")&&(value != "")&&(value != null);
		}, 'Selecione um assunto.');
		$("#televendas-form").validate({
			rules: {
				'Televendas[razaoSocial]': "required",
				'Televendas[cnpj]': "required",
				'Televendas[ddd]': {
					minlength: 2,
					number: true,
					required: true,
				},
				'Televendas[telefone]': {
					minlength: 8,
					number: true,
					required: true,
				},
				'Televendas[estado]': {
					comboEstado: true,
					required: true,
				},
				'Televendas[cidade]': {
					comboCidade: true,
					required: true,
				},
				'Televendas[email]': {
					required: true,
					email: true,
				},
				'Televendas[orcamentoDesejado]': {
					minlength: 2,
					required: true,
				},
			},
			errorLabelContainer: $("#formDialog ul.error"),
			wrapper: 'li',
   			/*submitHandler: function() { alert("Submitted!") },*/
   			errorContainer: "#formDialog",
			/*showErrors: function(errorMap, errorList) {
					log(this.errorList);
				    this.defaultShowErrors();
				    $("#formDialog" ).dialog( "open" );
				  },*/
			
			messages: {
				'Televendas[razaoSocial]': "Razão social é obrigat&oacute;rio   ",
				'Televendas[cnpj]': "CNPJ é obrigat&oacute;rio   ",
				'Televendas[ddd]': {
					required: "DDD é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres para DDD."),
				},
				'Televendas[telefone]': {
					required: "Telefone é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres para telefone."),
				},
				'Televendas[estado]': "Estado é obrigat&oacute;rio   ",
				'Televendas[cidade]': "Cidade é obrigat&oacute;rio   ",
				'Televendas[email]': {
					required: "Email é obrigat&oacute;rio   ",
					email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
				},
				'Televendas[orcamentoDesejado]': "Or&ccedil;amento desejado é obrigat&oacute;rio   "
			},
			invalidHandler: function(form, validator) {
					//log(validator.errorList);
				    //validator.defaultShowErrors();
				    $("#formDialog" ).dialog( "open" );
				  }
		});
		$("#faleConosco-form").validate({
			rules: {
				'FaleConosco[nome]': "required",
				'FaleConosco[cpf]': "required",
				'FaleConosco[ddd]': {
					minlength: 2,
					number: true,
					required: true,
				},
				'FaleConosco[telefone]': {
					minlength: 8,
					number: true,
					required: true,
				},
				'FaleConosco[estado]': {
					comboEstado: true,
					required: true,
				},
				'FaleConosco[cidade]': {
					comboCidade: true,
					required: true,
				},
				'FaleConosco[email]': {
					required: true,
					email: true,
				},
				'FaleConosco[loja]': {
					required: true,
				},
				'FaleConosco[assunto]': {
					comboAssunto: true,
					required: true,
				},
				'FaleConosco[messagem]': {
					required: true,
				},
			},
			errorLabelContainer: $("#formDialog ul.error"),
			wrapper: 'li',
   			/*submitHandler: function() { alert("Contato enviado com sucesso. Obrigado!") },*/
   			errorContainer: "#formDialog",			
			messages: {
				'FaleConosco[nome]': "Nome é obrigat&oacute;rio   ",
				'FaleConosco[cpf]': "CPF é obrigat&oacute;rio   ",
				'FaleConosco[ddd]': {
					required: "DDD é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
				},
				'FaleConosco[telefone]': {
					required: "Telefone é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
				},
				'FaleConosco[estado]': "Estado é obrigat&oacute;rio   ",
				'FaleConosco[cidade]': "Cidade é obrigat&oacute;rio   ",
				'FaleConosco[email]': {
					required: "Email é obrigat&oacute;rio   ",
					email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
				},
				'FaleConosco[loja]': "Loja é obrigat&oacute;rio   ",
				'FaleConosco[assunto]': "Assunto é obrigat&oacute;rio   ",
				'FaleConosco[messagem]': "Messagem é obrigat&oacute;rio   ",
			},
			invalidHandler: function(form, validator) {
					//log(validator.errorList);
				    //validator.defaultShowErrors();
				    log('opening modal dialog...')
				    $("#formDialog" ).dialog( "open" );
				  }
		});
		$("#cadastroDeClientes-form").validate({
			rules: {
				'CadastroDeClientes[nomeCompleto]': "required",
				'CadastroDeClientes[endereco]': "required",
				'CadastroDeClientes[n]': "required",
				'CadastroDeClientes[bairro]': "required",
				'CadastroDeClientes[cep]': {
					minlength: 5,
					maxlength: 8,
					number: true,
					required: true,
				},
				'CadastroDeClientes[cpf]': {
					minlength: 11,
					maxlength: 11,
					number: true,
					required: true,
				},
				'CadastroDeClientes[ddd]': {
					minlength: 2,
					number: true,
					required: true,
				},
				'CadastroDeClientes[telefone]': {
					minlength: 8,
					number: true,
					required: true,
				},
				'CadastroDeClientes[dddc]': {
					minlength: 2,
					number: true,
					required: true,
				},
				'CadastroDeClientes[celular]': {
					minlength: 8,
					number: true,
					required: true,
				},
				'CadastroDeClientes[estado]': {
					comboEstado: true,
					required: true,
				},
				'CadastroDeClientes[cidade]': {
					comboCidade: true,
					required: true,
				},
				'CadastroDeClientes[email]': {
					required: true,
					email: true,
				},
				'CadastroDeClientes[dataDeNascimento]': {
					required: true,
					dateBR: true,
				},
				'CadastroDeClientes[sexo]': {
					required: true,
				},
				'CadastroDeClientes[escolaridade]': {
					required: true,
				},
				'CadastroDeClientes[profissao]': {
					required: true,
				},
				'CadastroDeClientes[ofertasDeSMS]': {
					required: true,
				},
				'CadastroDeClientes[ofertasDeEmail]': {
					required: true,
				},
			},
			errorLabelContainer: $("#formDialog ul.error"),
			wrapper: 'li',
   			/*submitHandler: function() { 
   				var formdata = $('#cadastroDeClientes-form').serialize();
   				log(formdata);
   				$.ajax({
					//url: 'http://telhanorte.hospedagemdesites.ws/cabana/index.php/Cidades/GetCities',
					url: 'http://192.168.0.22/telhanorte/index.php/Cidades/GetCities',
					type: 'post',
					data: formdata,
					dataType: "json",
					async: false,
					success: function(ret) {
						log(ret);
					},
				    error: function(XMLHttpRequest, textStatus, errorThrown){
						log(XMLHttpRequest, textStatus, errorThrown);
				    }
				});
   			},*/
   			errorContainer: "#formDialog",			
			messages: {
				'CadastroDeClientes[nomeCompleto]': "Nome completo é obrigat&oacute;rio   ",
				'CadastroDeClientes[endereco]': "Endereco é obrigat&oacute;rio   ",
				'CadastroDeClientes[n]': "Nº é obrigat&oacute;rio   ",
				'CadastroDeClientes[bairro]': "Barrio é obrigat&oacute;rio   ",
				'CadastroDeClientes[cep]': {
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres para CEP."),
					maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres para CEP."),
					required: true,
				},
				'CadastroDeClientes[cpf]': "CPF é obrigat&oacute;rio   ",
				'CadastroDeClientes[ddd]': {
					required: "DDD é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres para DDD."),
				},
				'CadastroDeClientes[dddc]': {
					required: "DDD do celular é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres para DDD do celular."),
				},
				'CadastroDeClientes[telefone]': {
					required: "Telefone é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres para telefone."),
				},
				'CadastroDeClientes[celular]': {
					required: "Celular é obrigat&oacute;rio   ",
					minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres para celular."),
				},
				'CadastroDeClientes[estado]': "Estado é obrigat&oacute;rio   ",
				'CadastroDeClientes[cidade]': "Cidade é obrigat&oacute;rio   ",
				'CadastroDeClientes[email]': {
					required: "Email é obrigat&oacute;rio   ",
					email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
				},
				'CadastroDeClientes[dataDeNascimento]': "Data de nascimento é obrigat&oacute;rio [dd/mm/aaaa]",
				'CadastroDeClientes[sexo]': "Campo sexo é obrigat&oacute;rio   ",
				'CadastroDeClientes[escolaridade]': "Escolaridade é obrigat&oacute;rio   ",
				'CadastroDeClientes[profissao]': "Profissão é obrigat&oacute;rio   ",
				'CadastroDeClientes[estadaCivil]': "Estada Civil é obrigat&oacute;rio   ",
				'CadastroDeClientes[documentoDeIdentidade]': "Documento de identidade é obrigat&oacute;rio   ",
				'CadastroDeClientes[ofertasDeSMS]': "Ofertas de SMS é obrigat&oacute;rio   ",
				'CadastroDeClientes[ofertasDeEmail]': "Ofertas de email é obrigat&oacute;rio   ",
			},
			invalidHandler: function(form, validator) {
				    log('opening modal dialog...')
				    $("#formDialog" ).dialog( "open" );
				  }
		});
	});
	
})(window, jQuery)

function getUrlVars() {
	var map = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		map[key] = value;
	});
	return map;
}

