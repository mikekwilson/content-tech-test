<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
  use HasFactory;

  public function contentType() {
    return $this->belongsTo('App\Models\ContentType');

  }

}//end class
