<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VesselVisitFormRequest extends FormRequest
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
            'visits' => 'required|min:5|max:100',
            'voyage' => 'required|min:2|max:100',
            'vesselname' => 'required|min:5|max:500',
            'idstaterow'=>'required'
        ];
    }
}
