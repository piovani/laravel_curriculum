<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Http\Requests\CurriculumRequest;
use App\Http\Services\CreateCurriculum;

class CurriculumController extends Controller
{
    public function index()
    {
        return view('curriculum-form');
    }

    public function store(CurriculumRequest $request)
    {
        call_user_func(new CreateCurriculum(), $request->validated());

        return redirect()->guest('/');
    }
}
