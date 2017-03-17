@extends('layouts.admin')
	@section('content')
	@include('genero.modal')

	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong> Genero Editado Correctamente </strong>
	</div>

		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operacion</th>
			</thead>
			<tbody id="datos"> </tbody>	
		</table>

	@endsection

	@section('scripts')
		{!!Html::script('js/script2.js')!!}
	@endsection