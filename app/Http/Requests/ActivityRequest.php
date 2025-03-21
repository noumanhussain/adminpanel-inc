<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            'title' => 'required|max:500',
            'due_date' => 'required',
            'description' => 'required',
            'assignee_id' => 'sometimes|required',
            'quote_id' => 'sometimes|required|exists:personal_quotes,id',
        ];
    }
}
