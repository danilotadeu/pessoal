<html>
	<head>
		<title>Atividades</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link href="/css/app.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div align="center">
				<h1>Editar Atividade</h1>
			</div>
			<hr />
			<?php if(!empty(Session::get('message'))){?>
				<div class="notice notice-info">
					<strong>Aviso!</strong> {{ Session::get('message') }}
				</div>
			<?php }?>
			<?php if(!empty($errors->all())){?>
				<div class="notice notice-danger">
					<strong>Aviso!</strong> {{ Html::ul($errors->all()) }}
				</div>
			<?php }?>

			{{ Form::model($activities, array('route' => array('activities.update', $activities->id), 'method' => 'PUT')) }}

			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Nome:</label>
				<div class="col-sm-10">
					{{ Form::text('name', old('name'), array('class' => 'form-control')) }}
				</div>
			</div>
			<br /> &nbsp;
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Data de Início:</label>
				<div class="col-sm-4">
					{{ Form::date('date_start', old('date_start'), array('class' => 'form-control')) }}
				</div>
				<label class="control-label col-sm-2" for="pwd">Data de Fim:</label>
				<div class="col-sm-4">
					{{ Form::date('date_end', old('date_end'), array('class' => 'form-control')) }}
				</div>
			</div>
			<br />&nbsp;
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Descrição:</label>
				<div class="col-sm-10">
					{{ Form::textarea('description', old('description'),['class'=>'form-control']) }}
				</div>
			</div>
			<br />&nbsp;
			<div class="form-group">
				<div class="col-sm-6">
					<label class="control-label col-sm-2" for="email">Status:</label>
					{{ Form::select('status_id', $status,old('status_id'),['class'=>'form-control']) }}
				</div>
				<div class="col-sm-6">
					<label class="control-label col-sm-2" for="email">Situação:</label>
					{{ Form::select('active', [1=>'Ativo',2=>'Inativo'],old('active'),['class'=>'form-control']) }}
				</div>
			</div>
			<br /><br /><br />

			{{ Form::submit('Salvar', array('class' => 'btn btn-success')) }}

			<a class="btn btn-small btn-danger" href="{{ URL::to('activities') }}">Cancelar</a>
			{{ Form::close() }}
		</div>
	</body>
</html>