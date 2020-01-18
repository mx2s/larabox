<?
class UserTransformer implements ITransformer {
    public function one($model) {
        return response()->json([
            'name' => $model->name
        ]);
    }

    public function many($models) {
        $res = [];
        foreach ($models as $model) $res[] = $this->one($model);
        return response()->json($res);
    }
}