<html>
<head>
	<meta charset="UTF-8">
	<title>Laravel Validation</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
	
	<div class="jumbotron">
		<h1>Validation with Laravel 5</h1>
	</div>
	
	{!! Form::open(['url' => $submit]) !!}
	{!! csrf_field() !!}
	
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
			
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<div class="form-group">
				{{ Form::label('first_name', 'First Name') }}
				{{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Please enter your name']) }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'E-Mail Address') }}
				{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@mail.com']) }}
				@if ($errors->has('email'))
                    <span class="help-block">
                        <strong>* {{ $errors->first('email') }}</strong>
                    </span>
                @endif
			</div>

			<div class="form-group">
				{{ Form::label('birth_year', 'Year of Birth') }}
				{{ Form::text('birth_year', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('code', 'Code') }}
				{{ Form::text('code', null, ['class' => 'form-control']) }}
			</div>

			{{ Form::submit('Send', ['class' => 'btn btn-primary']) }}
		</div>
		
	</div>
	
	{!! Form::close() !!}

	<div class="row">
		<a href="https://laravel.com/docs/5.4/validation#available-validation-rules">Predefined rules v5.4</a>
	</div>
	
</div>


	
</body>
</html>