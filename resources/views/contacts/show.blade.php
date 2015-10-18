@extends('templates.main')
@section('content')

<h1>{{ $contact->name }}</h1>
<p>{{ $contact->address }}</p>
<p>{{ $contact->phone }}</p>

<a href="{{ route('contacts.index') }}" class="button">Back to Address Book</a>
<a href="{{ route('contacts.edit', $contact->id) }}" class="button">Edit Contact</a>

<div>
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['contacts.destroy', $contact->id]
        ]) !!}
    {!! Form::submit('Delete this contact?', ['class' => 'button']) !!}

    {!! Form::close() !!}
</div>

@stop
