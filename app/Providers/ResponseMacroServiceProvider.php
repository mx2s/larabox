<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('transform', function ($transformerClass, $data) {
            return response()->json([
                'data' => (new $transformerClass())->one($data)
            ]);
        });
        Response::macro('transformMany', function ($transformerClass, $data) {
            return response()->json([
                'data' => (new $transformerClass())->many($data)
            ]);
        });
    }
}
