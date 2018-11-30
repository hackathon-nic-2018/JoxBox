<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
					
				</button>
				<h4 class="modal-title">Enviar datos de cotizacion</h4>
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
						{!! Form::open(['route' => 'solicitud.store' , 'method' =>'POST','files' => true]) !!}
						<input type="hidden" name="_token" value="{{csrf_token() }}" id="token">
						<input type="hidden" id="id">
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label> Descripcion:</label>
								<input type="text" name="descripcion" class="form-control" placeholder="Agregar descripcion" id="nombreedit" name="descripcion">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label>User ID:</label>
								<input id="text" type="hidden" name="id_empleado" value="{{$empleado->id}}">
							</div>
						</div>
						@if (Auth::guest())

						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label>Empleado ID:</label>
								<input id="hidden" type="hidden" name="id_empleador" value="1">
							</div>
						</div>

						@else
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="form-group">
								<label>Empleado ID:</label>
								<input id="hidden" type="hidden" name="id_empleador" value="{{ Auth::user()->id }}">
							</div>
						</div>
						@endif
						
						
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


