<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
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
            'nip' => 'required|numeric|min:5|unique:pegawais,nip,' . optional($this->pegawai)->id,
            'image' => 'nullable|image|mimes:jpeg,png,gif,jpg',
            'nama_lengkap' => 'required|unique:pegawais,nama_lengkap,' . optional($this->pegawai)->id,
            'ttl' => ['required'],
            'tgll' => ['required'],
            'alamat' => ['required'],
            'jenis_kelamin' => ['required'],
            'gol' => ['required'],
            'eselon' => ['required'],
            'jabatan' => ['required'],
            'tempat_tugas' => ['required'],
            'agama' => ['required'],
            'instansi' => ['required'],
            'no_hp' => ['required', 'min:11', 'max:12'],
            'npwp' => 'required|numeric|unique:pegawais,npwp,' . optional($this->pegawai)->id,
        ];
    }
}
