<?php

namespace Shape\Equilateral;

class Square implements Equilateral {
  private float $side;

  public function setA(float $a): void {
    $this->side = $a;
  }

  public function area(): float {
    return pow($this->side, 2);
  }

  public function circumference(): float {
    return 4 * $this->side;
  }
}