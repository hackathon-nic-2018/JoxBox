<table class="table table-user-information">
	<tbody>
		<tr>
			<td>Nombre:</td>
			<td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
		</tr>
		<tr>
			<td>Cedula:</td>
			<td>{{$empleado->cedula}}</td>
		</tr>
		<tr>
			<td>Ciudad:</td>
			<td>{{$empleado->ciudad}}</td>
		</tr>
		<tr>
			<tr>
				<td>Municipio:</td>
				<td>{{$empleado->municipio}}</td>
			</tr>
			<tr>
				<td>Telefono</td>
				<td>{{$empleado->telefono}}</td>
			</tr>
			<tr>
				<td>Profesion</td>
				<td>{{$empleado->profesion}}</td>
			</tr>

		</tr>

	</tbody>
</table>