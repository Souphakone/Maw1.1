<?php

namespace App\Controllers;

class ExerciseController extends Controller
{
    function index()
    {
        return $this->view('exercise.create');
    }

    function create()
    {
        return $this->view('exercise.fields');
    }

    function edit()
    {
        return $this->view('exercise.edit');
    }

    function fields()
    {
        return $this->view('exercise.fields');
    }

    function fulfillments()
    {
        return $this->view('exercise.fulfillments');
    }

    function manage()
    {
        return $this->view('exercise.manage');
    }

    function take()
    {
        return $this->view('exercise.take');
    }
}
