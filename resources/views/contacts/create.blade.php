@extends('templates.main')
@section('content')

<h1>Add a new Contact</h1>

@include('partials.alerts.errors')

{!! Form::open([
    'route' => 'contacts.store'
]) !!}

<div class="form-name">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-address">
    {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-phone">
    {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Contact', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
