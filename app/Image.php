<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function index()
    {
        return view('image.index');
    }
}
