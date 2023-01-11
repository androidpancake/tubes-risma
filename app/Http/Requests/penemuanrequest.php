<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class penemuanrequest extends FormRequest
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
            'pengaduan_id' => 'required|integer|exists:travel_packages,id',
            'pesan' => 'required|max:255',
            'image' => 'required|image',
            'lokasi' => 'required|max:255'
        ];
    }
}
