<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['BookName','BookType','BookDesc', 'Author', 'PubDate', 'Version'];
}
