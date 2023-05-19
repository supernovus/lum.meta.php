<?php

namespace Lum\Meta;

/**
 * A trait for classes to return their constants using reflection.
 */
trait GetConstants
{
  public static function getConstants()
  {
    $reflect = new \ReflectionClass(static::class);
    return $reflect->getConstants();
  }
}