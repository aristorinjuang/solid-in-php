<?php

namespace Shape\Equilateral\Non;

use Shape\Equilateral\Equilateral;

interface NonEquilateral extends Equilateral {
  public function setB(float $b): void;
}