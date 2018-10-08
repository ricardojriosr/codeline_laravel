@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ Route('films.index') }}" class="btn btn-default">Film List</a>
        <h4>Film Info</h4>
        <ul>
          <li><strong>Name:</strong> {{ $film->name }}</li>
          <li><strong>Description:</strong> {{ $film->description }}</li>
          <li><strong>Rating:</strong> {{ $film->rating }}</li>
          <li><strong>Release Date:</strong> {{ $film->release_date }}</li>
          <li><strong>Ticket Price:</strong> {{ $film->country }}</li>
        </ul>
    </div>
    @if (Auth::guest())
    <?php //  Do Nothing ?>
    @else
    <div class="row">
      <h4>Comments</h4>
      <hr>
    </div>
    @endif
    @foreach($comments as $comment)
    <div class="row">
        <strong>Name:</strong> {{ $comment->name }}<br><br>
        <strong>Comment:</strong> {{ $comment->comment }}<br><br>
        <hr>
    </div>
    @endforeach
    <div class="row">

      {{ Form::open(['route' => ['comments.store', $film->slugurl], 'method' => 'POST']) }}


      <div class="form-group">
          {!! Form::label('name','Name') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your  Name', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::label('comment','Comment') !!}
          {!! Form::text('comment', null, ['class' => 'form-control', 'placeholder' => 'Film  Comment', 'required']) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
      </div>

      {{ Form::close() }}
    </div>
</div>
@endsection
