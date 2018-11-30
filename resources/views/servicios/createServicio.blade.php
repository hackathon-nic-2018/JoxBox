<div class="modal fade" id="myModalServicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Crear servicio</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						</button>
									
				</div>
				<div class="modal-body">								
					{!! Form::open(['route' =>'servicios.store','method'=>'POST','files'=>true]) !!}
					<div class="form-group col-md-6">
						{!!Form::label('Seleccionar categoria')!!}
						<select name="categoria" id="" class="form-control">
							@foreach($categoria as $c)
							<option value="{{$c->id}}">{{$c->nombre}}</option>
							          					
						@endforeach
					</select>
					</div>

					<div class="form-group col-md-6">
						    {!!form::label('Titulo de servicio:')!!}
						    {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba el nombre de su servicio'])!!}
					</div>

					<div class="form-group col-md-6">
						    {!!form::label('Descripcion de servicio:')!!}
						    {!!form::text('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Escriba una descripcion'])!!}
					</div>

					<div class="form-group col-md-6">
						    {!!form::label('Años de experiencia:')!!}
						    {!!form::text('años_experiencia',null,['id'=>'años_experiencia','class'=>'form-control','placeholder'=>'Años de experiencia'])!!}
					</div>
					<div class="form-group col-md-6">
						    {!!form::label('Puesto:')!!}
						    {!!form::text('puesto',null,['id'=>'puesto','class'=>'form-control','placeholder'=>'Escriba su puesto'])!!}
					</div>
					<div class="form-group col-md-6">
						    {!!form::label('Estado Laboral:')!!}
						    {!!form::text('estado_laboral',null,['id'=>'estado_laboral','class'=>'form-control','placeholder'=>'Estado laboral'])!!}
					</div>
					<div class="form-group col-md-6">
						    {!!form::label('Aspiracion salarial:')!!}
						    {!!form::text('aspiracion_salarial',null,['id'=>'aspiracion_salarial','class'=>'form-control','placeholder'=>'Aspiracion salarial'])!!}
					</div>

					<div class="form-group col-md-6">
					    {!!form::label('Imagen:')!!}
					    {!!form::file('imagen',['class' =>'form-control'])!!}					   	
					</div>
				</div>	
				<div class="modal-footer">
					{!!form::submit('Guardar',['name'=>'guardar','id'=>'guardar','class'=>'btn btn-primary'])!!}
					{!!Form::close()!!}
				</div>
			</div>
		</div>
</div>