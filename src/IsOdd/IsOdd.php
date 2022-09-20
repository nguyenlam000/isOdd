<?php

namespace IsOdd;

class IsOdd
{

  public static function isOdd($number)
  {
    // Test release
    return $number & 1;
  }
}
