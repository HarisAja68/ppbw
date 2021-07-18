<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
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
            'nip' => 'required|unique:tbl_karyawan,nip|min:2|max:10',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'foto' => 'required|mimes:png,jpg',
        ];
    }
}
