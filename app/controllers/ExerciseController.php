<?php

namespace App\Controllers;

use App\Models\Exercise;

class ExerciseController extends Controller
{
    function index()
    {
        return $this->view('exercise.create');
    }

    function take()
    {
        $allExercises = Exercise::selectAll();
        return $this->view('exercise.take', compact('allExercises'));
    }
}
