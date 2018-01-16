@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Регион</div>

				<div class="panel-body">

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li> 
							@endforeach
						</ul>
					</div>
					@endif 
					{!! Form::model($region, ['route' => ['saveregion', 'id' => $region->id]]) !!} 
					{{ csrf_field() }}
					<fieldset>

						<!-- Form Name -->
						<legend>Регион</legend>

						<div class="row">
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="textinput">Название</label>
								<div class="col-md-4">
									<input id="textinput" name="name" type="text" class="form-control input-md" required="" value="{{ $region->name }}">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<label class="col-md-4 control-label" for="btnsave">Изменения</label>
								<div class="col-md-8">
									<button id="btnsave" name="btnsave" class="btn btn-success">Сохранить</button>
									<a class="btn btn-primary" href="{{ route('regions') }}" role="button">Отмена</a>
								</div>
							</div>
						</div>

					</fieldset>
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection


