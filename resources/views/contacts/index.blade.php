@extends('templates.main')
@section('content')

<h1>Address Book</h1>

<div class="book">
    @foreach($contacts as $contact)
    <h3>{{ $contact->name }}</h3>
    <p>{{ $contact->address}}</p>
    <p>{{ $contact->phone}}</p>
    <p>
        <a href="{{ route('contacts.edit', $contact->id) }}" class="button">Edit Contact</a>
        <a href="{{ route('contacts.show', $contact->id) }}" class="button">View Contact</a>
    </p>
    <hr>
    @endforeach
</div>

<div class="add">
    <a class="button2" href="{{ route('contacts.create') }}">Add a New Contact</a>
</div>

@stop
