<?php
function substitute(string $patters, string $subst, string $string) {
  return preg_replace($patters, $subst, $string);
}

function getRequestMethod() {
  return $_SERVER['REQUEST_METHOD'];
}

function getRequestPath() {
  return substitute('/(.*)\?.*/m', "$1", $_SERVER['REQUEST_URI']);
}