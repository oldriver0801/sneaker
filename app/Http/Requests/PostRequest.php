<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Postrequest extends FormRequest
{
    public function rules()
    {
        return [
            'sneaker.name'=>'required|string|max:100',
            'sneaker.body'=>'required|string|max:400',
        ];
    }
}
