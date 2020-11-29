<?php

namespace App\Repositories;

use App\Contracts\ContentInterface;
use App\Models\Content;
use Illuminate\Database\Eloquent\Collection;

class ContentRepository implements ContentInterface {

  protected $model;

  public function __construct(Content $model) {
    $this->model = $model;

  }//end __construct()

  public function getById(int $id) : Content {
    return $this->model->find($id);

  }//end getById()

  public function search(string $searchString) : Collection {
    return $this->model->search($searchString);

  }//end search()

}// end class
