@extends('templates.main')
@section('content')

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

<h1>Edit Contact</h1>

@include('partials.alerts.errors')

{!! Form::model($contact, [
    'method' => 'PATCH',
    'route' => ['contacts.update', $contact->id]
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

{!! Form::submit('Update Contact', ['class' => 'add']) !!}
{!! Form::close() !!}

<br><br>
<a class="button" href="{{ route('contacts.index') }}">Go back to the Address Book</a>

@stop
