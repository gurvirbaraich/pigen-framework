<?php

namespace Pigen\Foundation\Routing;

use Pigen\Modules\Http\Request;

class Router
{
  public static function ignite(Request $request)
  {
    require_once ABSPATH . '/routes/web.php';

    return new Route(
      $request->getProperties()
    );
  }
}
