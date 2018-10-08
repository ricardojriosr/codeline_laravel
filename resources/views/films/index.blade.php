@extends('layouts.app')

@section('content')
<div class="container">
<div class="container">
    <div class="row">
        <h1>Films</h1>
        <a href="{{ Route('films.create') }}" class="btn btn-default">new Film</a>
        <ul>
        @foreach($films as $film)
          <li><a href="{{ Route('films.show',$film->slugurl) }}" class="btn btn-default"><strong>Name:</strong> {{ $film->name }}</a></li>
          <li><strong>Description:</strong> {{ $film->description }}</li>
          <li><strong>Rating:</strong> {{ $film->rating }}</li>
          <li><strong>Release Date:</strong> {{ $film->release_date }}</li>
          <li><strong>Ticket Price:</strong> {{ $film->country }}</li>
        @endforeach
        </ul>
    </div>
    <div class="text-center">
      {!! $films->render() !!}
    </div>
</div>
</div>
@endsection
