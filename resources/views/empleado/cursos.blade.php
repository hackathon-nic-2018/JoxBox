<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
					
				</button>
				<h4 class="modal-title">Agregar Datos Academicos</h4>
			</div>
			<div class="modal-body">
				{{Form::token()}}
				<div class="row">
					<div class="col-md-12">
						<div id="message-error_edit" class="alert alert-danger danger" role="alert" style="display: none ">
							<strong id="error_edit"></strong>
						</div>	
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-12 col-sm-12 col-m-12 col-xs-12">
						{!! Form::open(['route' => 'curso.store' , 'method' =>'POST','files' => true]) !!}
						<input type="hidden" name="_token" value="{{csrf_token() }}" id="token">
						<input type="hidden" id="id">
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label> Nombre de Curso:</label>
								<input type="text" name="curso" class="form-control" placeholder="Agregar curso" maxlength="60" id="nombreedit" name="curso">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label> Fecha Inicio:</label>
								<input id="date" type="date" name="fecha_inicio">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label> Fecha Fin:</label>
								<input id="date" type="date" name="fecha_fin">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label>Estado:</label>
								<select name="estado" id="estado">
									<option value="Completado">Completado</option>
									<option value="Proceso">Proceso</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label>User ID:</label>
								<input id="text" type="text" name="id_empleado" value="{{$empleado->id}}">
							</div>
						</div>
						
						
					</div>

				</div>

			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>


