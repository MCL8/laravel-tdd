<?php

namespace App\Http\Controllers;

use \App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function Store()
    {
        $book = Book::create($this->validateRequest());
    }

    public function update(Book $book)
    {
        $book->update($this->validateRequest());
    }

    /**
     * @return array
     */
    protected function validateRequest(): array
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required'
        ]);
    }
}
