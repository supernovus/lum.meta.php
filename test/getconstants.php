<?php

require_once 'vendor/autoload.php';

class ConstantTest
{
  use \Lum\Meta\GetConstants;

  const HELLO = 'World';
  const goodbye = ['universe','Cruel world'];
}

$t = new \Lum\Test();

$err = null;
try
{
  $c = ConstantTest::getConstants();
}
catch(Throwable $e)
{
  $err = $e;
}

$t->ok(is_null($err), 'call returned ok');
$t->ok(is_array($c), 'array returned');
$t->is(count($c), 2, 'constants count');
$t->ok(isset($c['HELLO']), 'first constant set');
$t->is($c['HELLO'], 'World', 'first constant value');
$t->ok(isset($c['goodbye']), 'second constant set');

echo $t->tap();
return $t;
