<?php

namespace App\Http\Transformers;

interface ITransformer {
    public function one($item);
    public function many($models);
}
