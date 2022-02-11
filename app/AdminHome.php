<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminHome extends Model
{
    protected $fillable = ['image', 'name','price', 'slug', 'action', 'priority'];
    protected $guarded = [];
}
