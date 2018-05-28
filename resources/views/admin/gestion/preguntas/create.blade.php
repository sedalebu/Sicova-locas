@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Pregunta </h3>
			@if (count($errors)>0)
			 <div class="alert alert-danger">
			 	<ul>
			 		@foreach ($errors->all() as $error)
			 		<li>
			 			{{$error}}
			 		</li>
			 		@endforeach
			 	</ul>
			 </div>
			 @endif

			 {!!Form::open(array('url'=>'admin/gestion/preguntas','method'=>'POST','autocomplete'=>'off'))!!}
			 {{Form::token()}}
			 <div class="form-group">
			 	<label for="pregunta">Pregunta </label>
			 	<input type="text" name="pregunta" class="form-control" placeholder="Pregunta...">
			 </div>
			 <div class="form-group">
			 	<label for="descripcion">Descripcion </label>
			 	<input type="text" name="descripcion" class="form-control" placeholder="Descripcion..." >
			 </div>
				 <div class="form-group">
				 	<label>Estado</label>
				 	<select name="estado" class="form-control selectpiker" data-live-search="true" id="estado">
					  <option value="1">Activo</option>
					  <option value="0">Inactivo</option> 	
					</select>
				 	
				 </div>
			 <div class="form-group">
			 	<button class="btn btn-primary" type="submit">Guardar </button>		
			 	<button class="btn btn-danger" type="reset">Cancelar </button>		 	
			 </div>

			 {!!Form::close()!!}

		</div>
	</div>

@endsection