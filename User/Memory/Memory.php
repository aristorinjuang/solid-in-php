<?php

namespace User\Memory;

use User\Repository;
use User\User;
use Shape\Shape;

class Memory implements Repository {
  private array $shapes;
  private array $shapeAreas;
  private array $shapePerimeters;

  public function addShape(User $u, Shape $s): void {
    $this->shapes[$u->id][] = $s;
    if (empty($this->shapeAreas[$u->id])) {
      $this->shapeAreas[$u->id] = 0;
    }
    $this->shapeAreas[$u->id] += $s->area();
    if (empty($this->shapePerimeters[$u->id])) {
      $this->shapePerimeters[$u->id] = 0;
    }
    $this->shapePerimeters[$u->id] += $s->perimeter();
  }

  public function shapes(User $u): array {
    return $this->shapes[$u->id];
  }

  public function shapeAreas(User $u): float {
    return $this->shapeAreas[$u->id];
  }

  public function shapePerimeters(User $u): float {
    return $this->shapePerimeters[$u->id];
  }
}