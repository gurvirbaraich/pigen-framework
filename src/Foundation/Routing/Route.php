<?php

namespace Pigen\Foundation\Routing;

class Route
{
  private static array $routes = array();
  private static array $request = array();

  public function __construct(array $request)
  {
    self::$request = $request;
  }

  public function __destruct()
  {
    dd(self::$routes);
    // TODO: Implement routing functionality
  }

  public static function GET(string $path, array $handlers): void {
    self::append("GET", $path, $handlers);
  }

  public static function POST(string $path, array $handlers): void {
    self::append("POST", $path, $handlers);
  }

  private static function append(string $method, string $path, array $handlers): void
  {
    self::$routes[$method][$path] = $handlers;
  }
}
