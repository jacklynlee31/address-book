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

<h1>{{ $contact->name }}</h1>
<p>{{ $contact->address }}</p>
<p>{{ $contact->phone }}</p>
<br><br>
<a href="{{ route('contacts.index') }}" class="button">Back to Address Book</a>
<a href="{{ route('contacts.edit', $contact->id) }}" class="button">Edit Contact</a>

<p>
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['contacts.destroy', $contact->id]
        ]) !!}
    {!! Form::submit('Delete this contact?', ['class' => 'button']) !!}
    {!! Form::close() !!}
</p>

@stop
