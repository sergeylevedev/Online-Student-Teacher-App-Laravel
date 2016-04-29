<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use App\User;

class QueryController extends Controller
{
    public function search(Request $request)
    {
        // Gets the search terms from our form submission 
        $query = Request::input('search');
        
        $result = Question::where('title', 'LIKE', '%' . $query . '%')
                          ->orWhere('body', 'LIKE', '%' . $query . '%');          

        // Paginate the questions
        $questions = $result->paginate(10);

        // returns a view and passes the view the list of questions and the original query.
        return view('search.results', compact('questions', 'query'));
     }
}
