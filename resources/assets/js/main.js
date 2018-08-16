
$(document).ready(function()
{
	$('#pessoas').DataTable();

});

var div;
window.onload = init;

function init(){
  	div = document.getElementById("telefones");
}

function adicionar(){
	$('#telefones').append('<p class="input-group"><input class="form-control telefone" placeholder="(00)00000-0000" minlength="14" maxlength="14" type="text" name="telefone[]" ></p>');

	$('.telefone').mask("(99)99999-9999");
}