<?php

namespace App\Http\Requests;

class StorePostRequest
{

    public function rules() {
        return [
            'categoryld' => 'required|exists:categories,id', 'name' => 'required|string|unique:products,name', 'description' => 'required|string',
            'price' => 'required|numeric',
        ]; }
}
