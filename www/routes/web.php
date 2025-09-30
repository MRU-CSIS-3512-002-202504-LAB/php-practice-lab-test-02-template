<?php

/*

TODO: EX-00

Add routes so that:
  - if a user types localhost into the browser, then
    the home/index.php controller is used.
  - if a user types localhost/ex-03 into the browser,
    the ex-03/search.php controller is used.
  - when the form in ex-03 is submitted via POST, the ex-03/results.php
    controller is used.

*/


$router->add("GET", "/ex-01", "ex-01/index.php");

$router->add("GET", "/ex-02", "ex-02/index.php");

$router->add("GET", "/ex-04", "ex-04/index.php");
