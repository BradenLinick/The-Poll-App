@extends('layouts.app')

@section('content')

<div class="container d-flex flex-wrap justify-content-around"> 
    @foreach($polls as $pol)
        <div class="m-3 p-2 border border-light rounded">
            <a href="{{ action('PollController@next', $pol->id) }}"><h2 class="border-bottom">{{ $pol->question }}</h2></a>
            {{-- <a href="{{ action('BookController@edit', $book->id) }}" class="btn btn-default bg-secondary">Edit</a> --}}
            {{-- @foreach($pol->choices as $cho)
            
              
            <input type="radio" name="type">
            
            <p>Votes: 0 - {{ $cho->choice }}</p>
            @endforeach

            <form method="post">
                @csrf
                <button type="submit" class="btn btn-success">Vote Or Die</button>
            </form> --}}

            

            
            

            {{-- <a href="{{ action('BookController@edit', $book->id) }}" class="btn btn-default text-white bg-secondary">Edit</a>
          <a href="{{ action('BookController@delete', $book->id) }}" class=" btn btn-default text-white bg-danger">Delete</a> --}}
       
        </div>
    @endforeach
  </div> 

@endsection