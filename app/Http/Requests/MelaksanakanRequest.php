<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MelaksanakanRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'pegawaitgs_id' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'nama_tgs' => 'required',
            'tmpt_tgs' => 'required',
            'tmt' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'pegawaitgs_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'nama_tgs.required' => 'Nama Kampus tidak boleh kosong',
            'tmpt_tgs.required' => 'Kota tidak boleh kosong',
            'tmt.required' => 'TMT tidak boleh kosong'
        ];
    }
}
