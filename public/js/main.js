
$(document).ready(function()
{
	$('#pessoas').DataTable();
	$('#price').mask("9.999.999,99");
});

function getId(id){
	document.getElementById("modal-footer").innerHTML=
		        '<a href="products/delete/{{$id}}" class="btn btn-danger">Sim</a> <a class="btn btn-success" data-dismiss="modal">Não</a>';
}
