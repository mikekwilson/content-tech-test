<?php

namespace App\Contracts;

interface RepositoryInterface {

  public function search(string $searchString) : collection;

}//end interface()
