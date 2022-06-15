<?php

namespace Shape\Equilateral;

use Shape\Shape;

interface Equilateral extends Shape {
  public function setA(float $a): void;
}