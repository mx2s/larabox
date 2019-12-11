<?php


namespace App\Http\Controllers\V1;

/**
 * Class HomeController
 * @package App\Http\Controllers\V1
 */
class HomeController
{
    /**
     * @return false|string
     */
    public function index() {
        return response()->json([
            'page' => 'home'
        ]);
    }
}
