<?php

namespace Pigen\Foundation;

use Pigen\Foundation\Http\Kernel;

class Application
{
  const VERSION = '0.0.01';

  public array $workers = array();

  public function __construct() {
    $this->workers['http'] = new Kernel();
  }
}
