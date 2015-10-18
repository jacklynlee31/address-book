@extends('templates.main')
@section('content')

<h1>Contact List</h1>
<p>List of all the contacts.</p>

<a href="{{ route('contacts.create') }}">Add a New Contact</a>

@stop
