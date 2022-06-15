<?php

namespace User;

use User\Repository;
use Shape\Shape;
use User\Permission;

class Guest implements User {
  public int $id;
  protected Repository $repo;

  function __construct(Repository $repo) {
    $this->id = time() + rand(000000,999999);
    $this->repo = $repo;
  }

  public function addShape(Shape $s): void {
    if (! Permission::hasPermission($this, $s)) {
      return;
    }
  
    $this->repo->addShape($this, $s);
  }

  public function shapeAreas(): float {
    return $this->repo->shapeAreas($this);
  }

  public function averageShapeArea(): float {
    return $this->repo->shapeAreas($this) / count($this->repo->shapes($this));
  }
}