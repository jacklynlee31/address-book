@extends('templates.main')
@section('content')

@include('partials.alerts.errors')

<style>
body {
    font-family: sans-serif;
    text-align: center;
}
h1 {
    text-align: center;
    text-transform: uppercase;
}
.button {
    background-color: #CFFFEF;
    color: black;
    border: 1px solid black;
    padding: 5px;
    text-decoration: none;
    font-size: 16px;
}
.form {
    padding: 10px;
}
.add {
    color: black;
    background-color: #CFFFEF;
    border: 1px solid black;
    font-size: 16px;
}
</style>

<h1>Add a new Contact</h1>

{!! Form::open([
    'route' => 'contacts.store'
]) !!}

<div class="form">
    {!! Form::label('name', 'Name:', ['class' => 'label']) !!}
    {!! Form::text('name', null, ['class' => 'input']) !!}
</div>

<div class="form">
    {!! Form::label('address', 'Address:', ['class' => 'label']) !!}
    {!! Form::text('address', null, ['class' => 'input']) !!}
</div>

<div class="form">
    {!! Form::label('phone', 'Phone:', ['class' => 'label']) !!}
    {!! Form::text('phone', null, ['class' => 'input']) !!}
</div>

<br><br>

{!! Form::submit('Create New Contact', ['class' => 'button']) !!}
{!! Form::close() !!}

<br><br>
<a href="{{ route('contacts.index') }}" class="button">Back to Address Book</a>

@stop
