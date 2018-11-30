<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Crear nueva categoria</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						</button>
									
				</div>
				<div class="modal-body">								
					{!! Form::open(['route' =>'categorias.store','method'=>'POST','files'=>true]) !!}
					<div class="form-group">
						    {!!form::label('Categoria:')!!}
						    {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba una categoria'])!!}
					</div>

					<div class="form-group">
					    {!!form::label('Imagen:')!!}
					    {!!form::file('imagen',['class' =>'form-control'])!!}					   	
					</div>
				</div>	
				<div class="modal-footer">
					{!!form::submit('Guardar',['name'=>'guardar','id'=>'guardar','class'=>'btn btn-primary btn-sm-mt-10'])!!}
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>