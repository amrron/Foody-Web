<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class CatatanMakananRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'makanan_id' => 'required|string',
            'jumlah' => 'required|numeric',
            'waktu' => 'required'
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response([
            "status" => "error",
            "message" => $validator->getMessageBag()
        ], 400));
    }
}
