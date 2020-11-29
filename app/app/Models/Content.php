<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Content extends Model
{
  use HasFactory;
  use Searchable;

  public function contentType() {
    return $this->belongsTo('App\Models\ContentType');

  }

}//end class
