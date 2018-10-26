<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\poll;
use App\choices;
use App\votes;

class PollController extends Controller
{

  public function __construct(){
        $this->middleware('auth')->except('index');
    //        $this->middleware('auth')->only(['create', 'store']);
    }
    public function index(){
        $poll = poll::get();
        $choice = choices::get();

        return view('polls.index', [
        'poll' => $poll,
        'choice' => $choice
      ]);
    }

    public function create(){
      return view('polls.create');
    }

    public function store(Request $request){

      // dd($request->only(['question']));
        $poll = poll::create($request->only(['question']));

        foreach($options as $option) {
          choices::create([
            'choice' => $option,
            'poll_id' => $poll->id
          ]);
        }

        $vote = votes::create($request);
        return redirect(action('PollController@index'));
    }

    public function add(){
      
    }
}
