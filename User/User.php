<?php

namespace User;

use Shape\Shape;

interface User {
  public function addShape(Shape $shape): void;
  public function shapeAreas(): float;
  public function averageShapeArea(): float;
}