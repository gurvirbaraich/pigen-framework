<?php
namespace Pigen\Modules\Http;

class Request
{
  private static array $parameters = array();
  private static array $properties = array();

  public function __construct()
  {
    match (getRequestMethod()) {
      'GET' => $this->load($_GET),
      'POST' => $this->load($_POST),
    };

    $this->populateProperties();
  }

  private function load(array $data): void
  {
    foreach ($data as $key => $value) {
      self::$parameters[$key] = $value;
    }
  }

  private function populateProperties(): void
  {
    self::$properties = [
      'path' => getRequestPath(),
      'method' => getRequestMethod(),
    ];

    dd(self::$properties);
  }

  public static function capture(): Request
  {
    return new self;
  }

  public function __get($name)
  {
    return self::$parameters[$name] ?? self::$properties[$name];
  }

  public function all(): array {
    return self::$parameters;
  }
}
