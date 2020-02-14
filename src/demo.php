<?php

namespace App;

/** @psalm-suppress MissingFile */
@include('does not exist.php');

include 'demo2.php';

echo other_fn();

does_not_exist();

$f = new OtherClass();
$f->does_not_exist();

