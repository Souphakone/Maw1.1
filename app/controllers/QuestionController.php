<?php

namespace App\Controllers;

use App\Models\Exercise;
use App\Models\Question; 
use App\Models; 

class QuestionController extends Controller
{
    function index(){
        return $this->view('question.create');
    }

    function edit(){
        return $this->view('exercise.edit');
    }

    function fields(){
        return $this->view('exercise.fields');
    }

    function fulfillments(){
        return $this->view('exercise.fulfillments');
    }

    function manage(){
        return $this->view('exercise.manage');
    }

    function take(){
        return $this->view('exercise.take');
    }

}