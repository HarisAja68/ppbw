<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuppliersRequest extends FormRequest
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
            'kode' => 'required|unique:tbl_suppliers,kode|min:2|max:10',
            'nama' => 'required',
            'barang' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ];
    }
}
