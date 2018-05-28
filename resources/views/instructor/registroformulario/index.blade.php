@extends ('layouts.user')
@section ('contenido_user')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Formularios Digilenciados <a href="registroformularios/create"><button class="btn btn-success">Nuevo</button></a></h3>
				@include('registroformulario.search')
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Fecha</th>
						<th>Formulario</th>
						<th>Usuario</th>
						<th>Ambiente</th>
						
					</thead>
					@foreach ($respuesta as $for)
					<tr>
						<td>{{ $for->fecha}}</td>
						<td>{{ $for->descripcion}}</td>
						<td>{{ $for->version}}</td>
						<td>

							@if ($for->estado=='1')						
							{{ $for->estado='Activo'}}
							@else 
							{{ $for->estado='Inactivo'}}
							@endif	

						</td>							

						<td>  
							<a href="{{URL::action('FormularioController@show',$for->idformulario)}}"><button class="btn btn-primary">Detalles</button></a>
							<a href="" data-target="#modal-delete-{{$for->idformulario}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
						</td>
					</tr>
					@include('admin.gestion.formularios.modal')
					@endforeach
				</table>
			</div>
			{{$formularios->render()}}  	
		</div>
		

	</div>




@endsection