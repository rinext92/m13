{{ Form::open(['url'=>$route, 'method'=>'POST']) }}
	{{ Form::input('text', 'username') }}
	{{ Form::password('pwd', array('class' => 'field')) }}

	{{ Form::submit('Login') }}
{{	Form::close() }}
