<?php

namespace App\Http\V1\Transformers\User;

use App\Http\Transformers\ITransformer;
use Illuminate\Http\JsonResponse;

/**
 * Class UserTransformer
 * @package App\Http\V1\Transformers\User
 */
class UserTransformer implements ITransformer {
    /**
     * @param $item
     * @return array
     */
    public function one($item) {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'email' => $item->email,
            'created_at' => $item->created_at
        ];
    }

    /**
     * @param $models
     * @return JsonResponse
     */
    public function many($models) {
        $res = [];
        foreach ($models as $model) $res[] = $this->one($model);
        return response()->json($res);
    }
}
