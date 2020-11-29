<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ContentType extends Model
{
  use HasFactory;
  use Searchable;

  public function contents() {
    return $thia->hasMany('App\Models\Content');

  }

}//end class
