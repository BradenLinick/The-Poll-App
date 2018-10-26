@extends('layouts.app')

@section('content')

<div class="container d-flex flex-wrap justify-content-around"> 
    
        <div class="m-3 p-2 border border-light rounded">
            <h2 class="border-bottom">{{ $new->question }}</h2>
            
            <form method="post" action="">
                @csrf
                @foreach($new->choices as $cho)
            <input type="radio" value="{{ $cho->id }}" name="type">
            
            <p>Votes: {{ $cho->counter }} - {{ $cho->choice }}</p>
            @endforeach

            
                <button type="submit" class="btn btn-success">Vote Or Die</button>
            </form>

            
            <a href="{{ action('PollController@index') }}" class="btn btn-primary">Back to index</a>

            
            

            {{-- <a href="{{ action('BookController@edit', $book->id) }}" class="btn btn-default text-white bg-secondary">Edit</a>
          <a href="{{ action('BookController@delete', $book->id) }}" class=" btn btn-default text-white bg-danger">Delete</a> --}}
       
        </div>
    
  </div> 

@endsection