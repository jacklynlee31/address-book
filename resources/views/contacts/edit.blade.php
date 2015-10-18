@extends('templates.main')
@section('content')

<h1>Edit Contact</h1>

@include('partials.alerts.errors')

{!! Form::model($contact, [
    'method' => 'PATCH',
    'route' => ['contacts.update', $contact->id]
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

{!! Form::submit('Update Contact', ['class' => 'update']) !!}
{!! Form::close() !!}

<a href="{{ route('contacts.index') }}">Go back to the Address Book</a>

@stop
