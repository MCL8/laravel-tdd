<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Author;

class AuthorsController extends Controller
{
    public function create()
    {
        return view('authors.create');
    }

    public function store()
    {
        Author::create($this->validateRequest());
    }

    protected function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'dob' => 'required',
        ]);
    }
}
