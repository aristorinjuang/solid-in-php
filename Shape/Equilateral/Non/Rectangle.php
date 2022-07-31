<?php

namespace Shape\Equilateral\Non;

class Rectangle implements NonEquilateral {
  private float $length;
  private float $width;

  public function setA(float $a): void {
    $this->length = $a;
  }

  public function setB(float $b): void {
    $this->width = $b;
  }

  public function area(): float {
    return $this->length * $this->width;
  }

  public function perimeter(): float {
    return 2 * ($this->length + $this->width);
  }
}