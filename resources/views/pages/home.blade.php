@extends('templates.main')
@section('content')

<h1>Address Book</h1>

<div class="add">
    <a class="button" href="{{ route('contacts.index') }}">View Address Book</a>
    <a class="button" href="{{ route('contacts.create') }}">Add a New Contact</a>
</div>

@stop
