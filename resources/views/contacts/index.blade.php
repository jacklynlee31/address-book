@extends('templates.main')
@section('content')

<h1>Contact List</h1>

@foreach($contacts as $contact)
    <h3>{{ $contact->name }}</h3>
    <p>{{ $contact->address}}</p>
    <p>{{ $contact->phone}}</p>
    <p>
        <a href="{{ route('contacts.show', $contact->id) }}" class="view">View Contact</a>
        <a href="{{ route('contacts.edit', $contact->id) }}" class="edit">Edit Contact</a>
    </p>
    <hr>
@endforeach

<a href="{{ route('contacts.create') }}">Add a New Contact</a>

@stop
