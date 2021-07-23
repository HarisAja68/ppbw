<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SamsungRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode' => 'required|unique:tbl_samsung,kode|min:2|max:10',
            'nama' => 'required',
            'foto' => 'required|mimes:png,jpg',
            'harga' => 'required',
            'stok' => 'required',
        ];
    }
}
