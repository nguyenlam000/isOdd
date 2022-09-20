<?php

namespace IsOdd;

class IsOdd
{

  public static function isOdd($number)
  {
    // Test release v1
    return $number & 1;
  }
}
