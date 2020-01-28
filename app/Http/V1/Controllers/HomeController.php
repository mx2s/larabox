<?php

namespace App\Http\Controllers\V1;

use App\Http\V1\Transformers\User\UserTransformer;

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

    /**
     * @return mixed
     */
    public function me() {
        $me = auth()->user();
        return response()->transform(UserTransformer::class, $me);
    }
}
