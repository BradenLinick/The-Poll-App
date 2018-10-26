@extends('layouts.app')

@section('content')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
  {{-- <div class="container"> --}}
    <div id="jumbo" class="d-flex align-items-center justify-content-between p-0 m-0 jumbotron jumbotron bg-dark">
      <h1 class="text-center flex-fill text-white">Books</h1>  
      <div class="flex-shrink" id="para"></div>
      <div class="bg-secondary" id="para"></div>
      <div class="flex-fill" id="infinity"></div>
    </div> 
        <div class="container d-flex flex-wrap justify-content-around mww-50"> 
            @foreach($polls as $poll)
                <div class="m-3 p-2 border border-light rounded">
                    <img src="{{ $poll->image }}" alt="title" class="border border-secondary mb-2"/>
                    <h2 class="text-white border-bottom">{{ $poll->title }}</h2>
                    <h3 class="text-white">{{ $poll->authors }}</h3>
                    
                    <a href="{{ action('Controller@edit', $poll->id) }}" class="btn btn-default text-white bg-secondary">Edit</a>
                  <a href="{{ action('Controller@delete', $poll->id) }}" class=" btn btn-default text-white bg-danger">Delete</a>
                </div>
            @endforeach
          </div>
        </div>
@endsection