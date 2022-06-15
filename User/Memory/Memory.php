<?php

namespace User\Memory;

use User\Repository;
use User\User;
use Shape\Shape;

class Memory implements Repository {
  private array $shapes;
  private array $shapeAreas;
  private array $shapeCircumferences;

  public function addShape(User $u, Shape $s): void {
    $this->shapes[$u->id][] = $s;
    if (empty($this->shapeAreas[$u->id])) {
      $this->shapeAreas[$u->id] = 0;
    }
    $this->shapeAreas[$u->id] += $s->area();
    if (empty($this->shapeCircumferences[$u->id])) {
      $this->shapeCircumferences[$u->id] = 0;
    }
    $this->shapeCircumferences[$u->id] += $s->circumference();
  }

  public function shapes(User $u): array {
    return $this->shapes[$u->id];
  }

  public function shapeAreas(User $u): float {
    return $this->shapeAreas[$u->id];
  }

  public function shapeCircumferences(User $u): float {
    return $this->shapeCircumferences[$u->id];
  }
}