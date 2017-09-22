<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
            
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->route('user'),
            'email' => 'required|email'.$this->route('user'),
            'role' => 'required',
            'role.*' => 'exists:roles,id',
            'datanascimento' => 'nullable|date_format:'.config('app.date_format'),
            'enduf' => 'max:2',
            'cep' => 'max:9',
            'endnumero' => 'max:6',
            'endcomplemento' => 'max:10',
            'peso' => 'numeric|nullable',
            'altura' => 'numeric|nullable',
            'calcado' => 'numeric|nullable',
            'manequim' => 'numeric|nullable',
            'camisa' => 'numeric|nullable',
            'terno' => 'numeric|nullable',
            'busto' => 'numeric|nullable',
            'cintura' => 'numeric|nullable',
            'quadril' => 'numeric|nullable',
        ];
    }
}
