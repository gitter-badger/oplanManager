<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
    * Fillable fields
    *
    * @var array
    **/
    protected $fillable = [
      'title',
      'content',
      'private',
      'user_id'
    ];

    public function username()
    {
      return $this->hasOne('App\User');
    }
}
