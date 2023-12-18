<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateperpusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama'=> 'required|string',
            'nim'=> 'required|numeric',
            'tanggal_lahir'=> 'required|string',
            'angkatan'=> 'required|string',
            'no_telepon'=> 'required|string',
            'email'=> 'required|string',
            'alamat'=> 'required|string'
        ];
    }
}
