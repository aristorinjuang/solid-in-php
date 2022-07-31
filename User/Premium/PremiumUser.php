<?php

namespace User\Premium;

use User\User;

interface PremiumUser extends User {
  public function shapePerimeters(): float;
  public function averageShapePerimeter(): float;
}