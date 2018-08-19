@extends('layouts.master')

@section('content')

	<a class="btn btn-primary" href="products/insert" role="button">Add Product</a>
	<a class="btn btn-primary" data-toggle='modal' data-target='#Import'role="button">Import Product</a>

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
				<button type='button' class='btn btn-danger' onclick="getId({{$product->id}})" data-toggle='modal' data-target='#Excluir'>
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
		        <h4 class="modal-title">Warning</h4>
		      </div>
		      <div class="modal-body">
		        <p>Delete this product?</p>
		      </div>
		      <div class="modal-footer" id="footer" align="center">
		      	<a id="delete-id" class="btn btn-danger">Yes</a>
		        <a class="btn btn-success" data-dismiss="modal">No</a>
		      </div>
		    </div>
		  </div>
		</div>
	 </tbody>
	</table>

	<div id="Import" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Import product</h4>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="products/import" enctype="multipart/form-data">
		        	{!! csrf_field() !!}
		        	<input type="file" name="csv" accept=".csv" required>
		      </div>
		      <div class="modal-footer" id="footer" align="center">
		      		<input type="submit" value="Import" class="btn btn-primary" role="button">
		      	</form>
		      </div>
		    </div>
		  </div>
		</div>

	<script type="text/javascript">
		function getId(id){
			var div = document.getElementById('delete-id').href="products/delete/"+id;
		}
	</script>
@endsection