<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
  use HasFactory;

  public function contents() {
    return $thia->hasMany('App\Models\Content');

  }

}//end class
