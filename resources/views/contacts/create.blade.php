@extends('templates.main')
@section('content')

<h1>Add a new Contact</h1>

{{ Form::open(array('url' => 'contacts')) }}
<div>
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
</div>

<div>
    {{ Form::label('address', 'Address') }}
    {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
</div>

<div>
    {{ Form::label('phone', 'Phone') }}
    {{ Form::string('phone', Input::old('phone'), array('class' => 'form-control')) }}
</div>
{{ Form::close() }}

@stop
