<?php


namespace App\Http\Controllers;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController
{
    /**
     * @return false|string
     */
    public function apiInfo() {
        return response()->json([
            'api_version' => config('app.version')
        ]);
    }
}
