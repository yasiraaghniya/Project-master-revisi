<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GajiRequest extends FormRequest
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
            'pegawaikgaji_id ' => 'required',
            'tglsurat' => 'required',
            'no_surat' => 'required',
            'gajipkk_lama' => 'required',
            'gajipkk_baru' => 'required',
            'masakerja' => 'required',
            'tahunkgs' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'pegawaikgaji_id.required' => 'Pilihan tidak boleh kosong',
            'tglsurat.required' => 'Tanggal Surat tidak boleh kosong',
            'no_surat.required' => 'Nomor Surat tidak boleh kosong',
            'gajipkk_lama.required' => 'Gaji Pokok Lama tidak boleh kosong',
            'gajipkk_baru.required' => 'Gaji Pokok Baru tidak boleh kosong',
            'masakerja.required' => 'Masa Kerja tidak boleh kosong',
            'tahunkgs.required' => 'Tahun KGS tidak boleh kosong'
        ];
    }
}
