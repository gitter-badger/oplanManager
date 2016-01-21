<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  /**
  * Fillable fields
  *
  * @var array
  **/
  protected $fillable = [
    'title',
    'content'
  ];
}
