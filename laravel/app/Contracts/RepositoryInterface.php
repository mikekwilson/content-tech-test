<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface {

  public function getById(int $id) : Model;
  public function search(string $searchString) : Collection;

}//end interface()
