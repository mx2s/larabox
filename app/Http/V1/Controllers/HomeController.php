<?php

namespace App\Http\Controllers\V1;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController
{
    /**
     * @return false|string
     */
    public function index() {
        return response()->json([
            'api' => [
                'version' => config('app.version')
            ]
        ]);
    }
}
