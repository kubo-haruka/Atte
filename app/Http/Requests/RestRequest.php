<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestRequest extends FormRequest
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
            'date' => 'nullable|date|date:"YYYY-mm-dd',
            'start_time' => 'nullable|date_format:"HH:ii:ss',
            'end_time' => 'nullable|after:start_time|date_format:"HH:ii:ss'
        ];
    }
}
