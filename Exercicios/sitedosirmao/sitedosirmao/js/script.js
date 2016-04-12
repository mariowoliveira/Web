$(document).ready(function(e){
	$("#dialogo").hide();
	$(".menuPrincipal a ").click(function(e){
		e.preventDefault();
		var href=$(this).attr('href');
		$(".conteudo").load(href+" .conteudo");
	});
});

function dialogo() {
	$("#dialogo").dialog({
			modal:true,
			resizable:false,
			width:400,
			height:200,
		buttons: {
	"Confirma": function(){
	$(this).dialog("close");
	verifica();
		},
	Cancelar: function(){
		$(this).dialog("close");
		}
		}
	});
};

function verifica(){
	var teste = 0;
	var validou = 0;
	var nome = document.querySelector("#nome").value.split(' ');
	var email = document.querySelector("#email").value.split('@');
	
	var fnome = nome[0];
	var snome = nome[1];
	var fmail = email[0];
	var smail = email[1];
	
	if((fnome.length < 3) && (snome.length < 4)){
		alert("Verificar campos obrigatórios");	
	}
	
	if((fmail.length < 3) && (smail.length < 4)){
		alert("Verificar campos obrigatórios");	
	}
}
