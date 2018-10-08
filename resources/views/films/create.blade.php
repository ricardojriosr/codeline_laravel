@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ Route('films.index') }}" class="btn btn-default">List</a>

{{ Form::open(['route' => 'films.store', 'method' => 'POST', 'files' => true]) }}


<div class="form-group">
    {!! Form::label('name','Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Film  Name', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Film Description', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('release_date','Release Date') !!}
    {!! Form::text('release_date', null, ['class' => 'form-control', 'placeholder' => 'Release Date', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('country','Country') !!}
    {!! Form::text('country', null, ['class' => 'form-control', 'placeholder' => 'Country', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('rating','Rating') !!}
    {!! Form::number('rating', null, ['class' => 'form-control', 'placeholder' => 'Rating', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('ticket_price','Ticket Price') !!}
    {!! Form::number('ticket_price', null, ['class' => 'form-control', 'placeholder' => 'Ticket Price', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('image','Image')!!}
    {!! Form::file('image',['class' => 'image_article']) !!}
</div>

<div class="form-group">
    {!! Form::label('genres','Genres')!!}
    {!! Form::select('genres[]', $genres, null, ['class' => 'form-control', 'multiple' => 'multiple', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

</div>
{{ Form::close() }}

@endsection
