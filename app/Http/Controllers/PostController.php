<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $fillable = ['name', 'lines_of_business', 'email', 'phone', 'company'];
}
