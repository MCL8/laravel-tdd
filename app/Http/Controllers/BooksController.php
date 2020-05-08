<?php

namespace App\Http\Controllers;

use \App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function Store()
    {
        $book = Book::create($this->validateRequest());

        return redirect($book->path());
    }

    /**
     * @param Book $book
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Book $book)
    {
        $book->update($this->validateRequest());

        return redirect($book->path());
    }

    /**
     * @param Book $book
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');
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
