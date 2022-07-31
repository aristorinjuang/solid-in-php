<?php

namespace User\Premium;

use User\Guest;
use User\Repository;

class Member extends Guest implements PremiumUser {
  function __construct(Repository $repo) {
    parent::__construct($repo);
  }

  public function shapePerimeters(): float {
    return $this->repo->shapePerimeters($this);
  }

  public function averageShapePerimeter(): float {
    return $this->repo->shapePerimeters($this) / count($this->repo->shapes($this));
  }
}