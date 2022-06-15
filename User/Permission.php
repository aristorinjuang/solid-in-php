<?php

namespace User;

use User\User;
use Shape\Shape;

class Permission {
  public static function hasPermission(User $u, Shape $s): bool {
    if (!in_array('User\User', class_implements($u))) {
      return true;
    }
    if (in_array('Shape\Equilateral\Equilateral', class_implements($s))) {
      return true;
    }
    return false;
  }
}