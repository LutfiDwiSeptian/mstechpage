<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'posts';
    protected $fillable = ['name', 'line_of_business','company_name','job_title','email', 'phone_number'];
    protected $attributes = [
        'company_name' => ''
    ];
}
