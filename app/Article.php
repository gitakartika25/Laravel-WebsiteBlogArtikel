<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
//PRAKTIKUM ORM
    protected $fillable = ['title','content','featured_image', 'writer'];

}
