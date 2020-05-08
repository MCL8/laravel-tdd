<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    protected $fillable = ['title', 'author'];

    /**
     * @return string
     */
    public function path()
    {
        return "/books/{$this->id}";
    }
}
