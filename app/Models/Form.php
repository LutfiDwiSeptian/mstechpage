<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    // Using the actual column name present in the database: line_of_business
    protected $fillable = ['name', 'line_of_business', 'email', 'phone', 'company'];
}
