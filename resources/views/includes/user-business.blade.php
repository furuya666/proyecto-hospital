@if(!$customer)
<div class="modal modal-xl fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="ModalCreateTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content" style="box-shadow: rgba(255, 255, 255, 0.5) 0px 22px 70px 4px;">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLongTitle">Crear Usuario</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
					<span aria-hidden="true" class="text-danger">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				{!! Form::open(['url'=>'process/company/user-register', 'method'=>'post', 'id'=>'form-user-register']) !!}
				<div class="row flex">
					<div id="field_name" class="col-sm-6 flex-item ">
						<label for="first_name" class="control-label">Nombre (*)</label>
						<input class="form-control input-lg " id="first_name" placeholder="Ej: Juan José" name="first_name" type="text" required>
					</div>
					<div id="field_name" class="col-sm-6 flex-item ">
						<label for="last_name" class="control-label">Apellidos (*)</label>
						<input class="form-control input-lg " id="last_name" placeholder="Ej: Perez Perez" name="last_name" type="text" required>
					</div>
					<div id="field_email" class="col-sm-6 flex-item ">
						<label for="email" class="control-label">Email</label>
						<input class="form-control input-lg " id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Ej: juanperez@gmail.com" name="email" type="email" required>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 left">
						<input type="hidden" value="{{ $business->id }}" class="form-control input-lg " id="business" hidden readonly name="business" type="hidden">
						<button type="submit" name="button" class="btn btn-primary mr-1 mb-1 btn-site waves-effect waves-light">Guardar</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@else
<div class="modal modal-xl fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content" style="box-shadow: rgba(255, 255, 255, 0.5) 0px 22px 70px 4px;">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
					<span aria-hidden="true" class="text-danger">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				{!! Form::open(['url'=>'process/company/user-edit', 'method'=>'post', 'id'=>'form-user-edit']) !!}
				<div class="row flex">
					<div id="field_name" class="col-sm-6 flex-item ">
						<label for="first_name" class="control-label">Nombre (*)</label>
						<input class="form-control input-lg " id="first_name" value="{{ $customer->first_name }}" placeholder="Ej: Juan José" name="first_name" type="text" required>
					</div>
					<div id="field_name" class="col-sm-6 flex-item ">
						<label for="last_name" class="control-label">Apellidos (*)</label>
						<input class="form-control input-lg " id="last_name" value="{{ $customer->last_name }}" placeholder="Ej: Perez Perez" name="last_name" type="text" required>
					</div>
					<div id="field_email" class="col-sm-6 flex-item ">
						<label for="email" class="control-label">Email</label>
						<input class="form-control input-lg " id="email" @if($customer->user) value="{{ $customer->user->original_email }}" @endif pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Ej: juanperez@gmail.com" name="email" type="email" required>
					</div>
					<div id="field_reenviar" class="col-sm-6 flex-item ">
						<div class="h-100 w-100 text-center">
							<button type="button" id="btn-resend-email" name="button" class="btn btn-secondary btn-site waves-effect waves-light mt-md-4 mt-lg-5"><i class="feather icon-refresh-cw mr-1"></i>Reenviar email</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 left">
						<input type="hidden" value="{{ $business->id }}" class="form-control input-lg " id="business" hidden readonly name="business" type="hidden">
						<input type="hidden" value="{{ $customer->id }}" class="form-control input-lg " id="customer" hidden readonly name="customer" type="hidden">
						<button type="submit" id="btn-submit" name="button" class="btn btn-primary mr-1 mb-1 btn-site waves-effect waves-light">Guardar</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endif