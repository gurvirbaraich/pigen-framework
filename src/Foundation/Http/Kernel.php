<?php
namespace Pigen\Foundation\Http;

use Pigen\Foundation\Routing\Router;
use Pigen\Modules\Http\Request;

class Kernel {
  public function handle(Request $request) {
    Router::ignite($request);
  }
}