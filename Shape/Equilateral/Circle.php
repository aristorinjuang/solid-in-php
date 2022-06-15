<?php

namespace Shape\Equilateral;

class Circle implements Equilateral {
  private float $radius;

  public function setA(float $a): void {
    $this->radius = $a;
  }

  public function area(): float {
    return pi() * pow($this->radius, 2);
  }

  public function circumference(): float {
    return 2 * pi() * $this->radius;
  }
}