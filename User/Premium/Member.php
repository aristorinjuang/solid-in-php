<?php

namespace User\Premium;

use User\Guest;
use User\Repository;

class Member extends Guest implements PremiumUser {
  function __construct(Repository $repo) {
    parent::__construct($repo);
  }

  public function shapeCircumferences(): float {
    return $this->repo->shapeCircumferences($this);
  }

  public function averageShapeCircumference(): float {
    return $this->repo->shapeCircumferences($this) / count($this->repo->shapes($this));
  }
}