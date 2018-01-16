@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Профиль</div>

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

					{!! Form::model($user, ['route' => ['update']]) !!}
	                 
	                    {{ csrf_field() }}
						<fieldset>
						
						<!-- Form Name -->
						<legend>Профиль пользователя</legend>
						
						<div class="row">
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Ф.И.О.</label>  
							  <div class="col-md-4">
							  	<input id="textinput" name="name" type="text" class="form-control input-md" required="" value="{{ $user->name }}">
							  </div>
							</div>
						</div>
						
						<div class="row">
							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Пароль</label>  
							  <div class="col-md-4">
							  <input id="textinput" name="pwd" type="password" class="form-control input-md" value="{{ $user->password }}">
							    
							  </div>
							</div>
						</div>
						
						<div class="row">
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Повторите пароль</label>  
						  <div class="col-md-4">
						  <input id="textinput" name="pwd_confirmed" type="password" class="form-control input-md" value="{{ $user->password }}">
						  </div>
						</div>
						</div>
						
						<div class="row">
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Email</label>  
						  <div class="col-md-4">
						  <input id="textinput" name="email" type="text" class="form-control input-md" value="{{ $user->email }}">
						  </div>
						</div>
						</div>
						
						<div class="row">
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Регион</label>  
						  <div class="col-md-4">
						  <input id="textinput" name="region" type="text" class="form-control input-md" value="">
						  </div>
						</div>
						</div>
						
						<div class="row">
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="textinput">Роль</label>  
						  <div class="col-md-4">
						  <input id="textinput" name="role" type="text" placeholder="" class="form-control input-md">
						  </div>
						</div>
						</div>
						
						<div class="row">
						<div class="form-group">
						  <label class="col-md-4 control-label" for="btnsave">Изменения</label>
						  <div class="col-md-8">
						    <button id="btnsave" name="btnsave" class="btn btn-success">Сохранить</button>
						    <a class="btn btn-primary" href="{{ route('home') }}" role="button">Отмена</a>
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


