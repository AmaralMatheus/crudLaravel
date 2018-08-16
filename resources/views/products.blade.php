@extends('layouts.master')

@section('content')

	<a class="btn btn-primary" href="products/insert" role="button">Add Product</a>
	<a class="btn btn-primary" href="#" role="button">Import Product</a>

	<table align="center" id="pessoas" class="table table-striped table-bordered">
	 <thead>
	  	<tr>
	    <th>Product id</th>
	    <th>Product name</th> 
	    <th>Product price</th>
	    <th>Actions</th>
		</tr>
	 </thead>
	 <tbody>

	@foreach ($products as $product)
		<tr>
			<td style='padding:7px;'>{{$product->id}}</td>
			<td style='padding:7px;'>{{$product->name}}</td>
			<td style='padding:7px;'>{{$product->price}}</td>
			<td style='padding:7px;' align="center">
				<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#Excluir'>
					<span class='glyphicon glyphicon-trash' aria-hidden='true'>
				</button>
				<a class='btn btn-warning' href='products/edit/{{$product->id}}'>
					<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
				</a>
			</td>
		</tr>
	@endforeach


		<div id="Excluir" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Aviso</h4>
		      </div>
		      <div class="modal-body">
		        <p>Deseja realmente excluir esta pessoa?</p>
		      </div>
		      <div class="modal-footer" align="center">
		        <a href='products/delete/{{$product->id}}' class="btn btn-danger">Sim</a>
		        <a class="btn btn-success" data-dismiss="modal">Não</a>
		      </div>
		    </div>

		  </div>
		</div>
	 </tbody>
	</table>
@endsection