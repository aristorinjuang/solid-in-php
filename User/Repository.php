<?php

namespace User;

use User\User;
use Shape\Shape;

interface Repository {
  public function addShape(User $u, Shape $s): void;
  public function shapes(User $u): array;
  public function shapeAreas(User $u): float;
  public function shapePerimeters(User $u): float;
}