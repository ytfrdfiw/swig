<?php

require "tests.php";
require "prefix.php";

// No new functions
check::functions(array());
// New classes
check::classes(array('ProjectFoo'));
// No new vars
check::globals(array());

$f = new ProjectFoo();
// This resulted in "Fatal error: Class 'Foo' not found"
$f->get_self();

check::done();
