<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $table = 'categories';
    public $fillable = ['id', 'name', 'slug'];
}
