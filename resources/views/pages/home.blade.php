@extends('templates.main')
@section('content')

<h1>Welcome</h1>
<a href="{{ route('contacts.index') }}">View Address Book</a>
<a href="{{ route('contacts.create') }}">Add a New Contact</a>

@stop
