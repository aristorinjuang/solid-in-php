<?php

namespace User\Premium;

use User\User;

interface PremiumUser extends User {
  public function shapeCircumferences(): float;
  public function averageShapeCircumference(): float;
}