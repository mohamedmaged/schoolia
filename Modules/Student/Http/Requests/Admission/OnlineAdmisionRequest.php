<?php

namespace Modules\Student\Http\Requests\Admission;

use Illuminate\Foundation\Http\FormRequest;

use App\Traits\ErrorRequestApi;

class OnlineAdmisionRequest extends FormRequest
{
    use ErrorRequestApi;
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "student"          =>"required|array",
            "student.0.name"     =>"required|array",
            "student.0.name.en"  =>"required|string|max:255" ,
            "student.0.name.ar"  =>"required|string|max:255" ,

        ];
    }

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
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'student.0.name.required'     => 'must be an array',
            'student.0.name.en.required'  => 'Name is required!',
            'student.0.name.ar.required'  => 'Password is required!'
        ];
    }

   
}
