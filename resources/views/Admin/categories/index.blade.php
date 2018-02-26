@extends ('layouts.app')

@section ('content')
	<div class='container'>
		
			<div class="cold-md-12 col-md-offset-2">
				<div class="card">
					<div class="card-header">
					    <nav class="navbar navbar-light bg-light">
							<h4> Lista de Categorias
							 </h4>
						  <a href="{{route('categories.create')}}" class="btn btn-sm btn btn-primary pull-right">		
							<i class="fa fa-plus"></i> Crear
						</a>
						</nav>			
					  </div>

						<div class="card-body">
							<table class="table table-bordered">
								<caption></caption>
								<thead>
									<tr>
										<th width="10px">ID</th>
										<th>Nombre</th>
										<th>Contenido</th>
										<th colspan="3">&nbsp; Opciones</th>
									</tr>
								</thead>
								<tbody>

									 @foreach($categories as $category)
									<tr>
										<td class="table-success">{{ $category->id }}</td>
		                                <td>{{ $category->name }}</td>
		                                <td>{{ $category->body }}</td>

		                                <td width="10px">
		                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> Ver</a>

		                                </td>
		                                <td width="10px">
		                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">
											<i class="fa fa-edit"></i>
		                                    Editar</a>
		                                </td>

										<td width="10px">
											{!! Form::open(['route'=> ['categories.destroy', $category->id],

											'method' => 'DELETE'])   !!}

											<!-- Button trigger modal -->
										<button type="button" class="btn-sm btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
										 <i class="fa fa-eraser"></i>  Eliminar
										</button>

										<!-- Modal -->
										<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLongTitle">¿Desea Eliminar la etiqueta?</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        <p> La siguiente etiqueta se borrar a continuación y no podras volver a ocuparla
										        ¿Esta seguro de querer eliminarla? </p> 
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
										        <button type="submit" class="btn btn-danger">ELIMINAR</button>
										      </div>
										    </div>
										  </div>
										</div>

											{!! Form::close() !!}
										</td>

									</tr>
									@endforeach
								</tbody>
							</table>
							  {{ $categories->render() }}
						</div>
				</div>
			</div>
		
	</div>

@endsection