@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('newregion') }}"
				role="button">Добавить</a>
		</div>
		@if (count($regions) >= 1)
		<table class="table table-responsive">
			<thead>
				<tr>
					<th>#</th>
					<th>Наименование</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@php ($i = 1) @foreach ($regions as $region)
				<p></p>
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $region->name }}</td>
					<td>
						<a class="btn btn-primary" href="{{ route('editregion', ['id' => $region->id]) }}" role="button">Изменить</a>
					</td>
					<td>
						<a class="btn btn-primary" href="{{ route('delregion', ['id' => $region->id]) }}" role="button">Удалить</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else 
			Нет записей
		@endif

	</div>
</div>
@endsection


