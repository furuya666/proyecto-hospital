<h4><hr>Asignar Beneficiarios a:</h4>
{!! Form::open(['url'=>url('process/customer-admin/assign-coupons/'.bin2hex(random_bytes(32))), 'method'=>'post', 'class'=>'form-horizontal prevent-double-submit', 'id'=>'assign_coupon']) !!}
	<div class="row flex">
		<div id="field_name" class="col-sm-6 flex-item ">
			<label for="age_min" class="control-label">Por rango de edades</label>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<input type="number" name="age_min" class="form-control key-up-property age" id="age_min" @if($coupon) value="{{ $assignments->age_min }}" @endif placeholder="Edad Min." @if($view) readonly @endif>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<input type="number" name="age_max" class="form-control key-up-property age" id="age_max" @if($coupon) value="{{ $assignments->age_max }}" @endif placeholder="Edad Max." @if($view) readonly @endif>
					</div>
				</div>
			</div>
		</div>

		<div id="field_gender" class="col-sm-6 flex-item ">
			<label for="gender" class="control-label">Por genero
			</label>
			<div class="mt-radio-inline">
				<label class="mt-radio">Masculino <input class="field_gender option_male" id="gender" data-checkbox="true" name="gender" type="radio" value="male" @if($coupon&&$assignments->gender=='male') checked @endif @if($view) disabled @endif>
				</label>
				<label class="mt-radio">Femenino <input class="field_gender option_dfemale" id="gender" data-checkbox="true" name="gender" type="radio" value="female" @if($coupon&&$assignments->gender=='female') checked @endif @if($view) disabled @endif>
				</label>
			</div>
		</div>

		<div id="field_ci_expedition" class="col-sm-6 flex-item ">
			<label for="ci_expedition" class="control-label">Por expedición de CI</label>
			<div class="mt-checkbox-inline">
				@foreach (['LP','SC','CB','CH','TA','OR','PO','BE','PA','OTRO'] as $key => $item)
				<label class="mt-checkbox">{{ $item }} <input class="field_ci_expedition ci_expedition" id="ci_expedition" data-checkbox="true" name="ci_expedition[]" type="checkbox" value="{{ $item }}" @if($coupon&&in_array($item, $assignments->ci_expedition)) checked @endif wtx-context="1DA7EA0B-35DE-4DF2-8384-02F0C454AC9D" @if($view) disabled @endif></label>
				@endforeach
			</div>
		</div>

		<div id="field_all" class="col-sm-6 flex-item ">
			<label for="all" class="control-label">Todos</label>
			<div class="mt-checkbox-inline">
				<label class="mt-checkbox">Todos <input class="field_all option_disabled" id="all" data-checkbox="true" name="all[]" type="checkbox" value="all" @if($coupon&&$assignments->all=='all') checked @endif wtx-context="990BEC24-DD35-40D8-94EF-55A6CD2F8F19" @if($view) disabled @endif>
				</label>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-12 left">
			<input name="action_form" type="hidden" value="edit" wtx-context="898068D7-95A4-41A8-8BB3-DF90C4F3613B">
			<input name="model_node" type="hidden" value="coupon" wtx-context="4376B339-55AF-496E-8145-C241CD18A987">
			<input name="parent_id" type="hidden" value="{{ $parent_id }}" wtx-context="41B127ED-8A91-4C50-963F-509C94E00475">
			<br>
			<button @if($view) disabled @endif type="submit" id="btn-assign_coupon" name="button" class="btn btn-primary mr-1 mb-1 btn-site waves-effect waves-light">Guardar</button>
		</div>
	</div>
{!! Form::close() !!}